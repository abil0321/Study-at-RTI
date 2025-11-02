<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use iio\libmergepdf\Merger;

class PdfController extends Controller
{
    public function generatePdf()
    {
        $studentData = [
            'name'      => 'Budi Santoso',
            'nisn'      => '0012345678',
            'graduated_at' => '15 Oktober 2025'
        ];

        // 1. Generate halaman 1 menggunakan Laravel DomPDF Wrapper
        $html = view('certificate.riplay', ['student' => $studentData])->render();

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($html);
        $pdf->setPaper('a4', 'portrait');

        // 2. Save PDF ke temporary file
        $page1Path = storage_path('app/temp/riplay_page1_' . time() . '.pdf');
        $tempDir = storage_path('app/temp');

        if (!file_exists($tempDir)) {
            mkdir($tempDir, 0755, true);
        }

        // Gunakan output() untuk mendapatkan content PDF
        $page1Content = $pdf->output();
        file_put_contents($page1Path, $page1Content);

        // 3. Path ke template PDF
        $templatePath = public_path('assets/document/certificates/msig/merge/Final RIPLAY Personal Unfilled Form - for merge.pdf');

        // 4. Merge PDFs
        try {
            $merger = new Merger();
            $merger->addFile($page1Path);
            $merger->addFile($templatePath);
            $mergedPdfContent = $merger->merge();

            // 5. Save hasil merge
            $outputPath = storage_path('app/output/riplay_merged_' . time() . '.pdf');
            $outputDir = storage_path('app/output');

            if (!file_exists($outputDir)) {
                mkdir($outputDir, 0755, true);
            }

            file_put_contents($outputPath, $mergedPdfContent);

            // 6. Cleanup temp file
            if (file_exists($page1Path)) {
                unlink($page1Path);
            }

            // 7. Return merged PDF
            return response()->download($outputPath)->deleteFileAfterSend(true);
        } catch (\Exception $e) {
            // Cleanup on error
            if (file_exists($page1Path)) {
                unlink($page1Path);
            }

            return response()->json([
                'error' => 'Gagal menggabungkan PDF',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
