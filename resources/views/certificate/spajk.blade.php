<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Surat Permintaan Asuransi Jiwa Kredit</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url('{{ public_path('template/certificate/background/Background SPAJK MSIG_page-0001.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            /* Adjust as needed: 'contain', '100% 100%' */
        }

        /* Mengatur font dasar dan ukuran halaman A4 */
        @page {
            margin: 10px 15px;
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            /* DejaVu Sans mendukung banyak karakter, termasuk checkbox */
            font-size: 9pt;
            color: #333;
        }

        /* Header dan Footer untuk setiap halaman */
        .header,
        .footer {
            width: 100%;
            position: fixed;
        }

        .header {
            top: 20px;
            /* Sedikit di atas margin */
            left: 0;
            right: 0;
        }

        .footer {
            bottom: 0px;
            /* Sedikit di bawah margin */
            left: 0;
            right: 0;
            font-size: 8pt;
        }

        /* Utilitas untuk teks */
        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        /* Judul utama dokumen */
        .main-title {
            text-align: center;
            font-weight: bold;
            font-size: 12pt;
            margin: 15px 0;
            text-decoration: underline;
        }

        /* Judul setiap seksi (I, II, III, IV) */
        .section-title {
            background-color: #e0e0e0;
            font-weight: bold;
            padding: 4px;
            margin-top: 15px;
            margin-bottom: 5px;
            border: 1px solid #333;
        }

        /* Tabel utama untuk layout form */
        .form-table {
            width: 100%;
            border-collapse: collapse;
        }

        .form-table td {
            padding: 3px 2px;
            vertical-align: top;
        }

        /* Kolom label (sebelah kiri) */
        .form-table td.label {
            width: 25%;
        }

        /* Kolom isian (sebelah kanan) */
        .form-table td.value {
            width: 75%;
            border-bottom: 1px solid #999;
        }

        .form-table td.value-nb {
            /* Value No Border */
            width: 75%;
        }

        /* Checkbox styling */
        .checkbox {
            display: inline-block;
            margin-right: 15px;
        }

        /* Tabel untuk data kesehatan */
        .health-table {
            width: 100%;
            border: 1px solid #333;
            border-collapse: collapse;
            margin-top: 5px;
        }

        .health-table th,
        .health-table td {
            border: 1px solid #333;
            padding: 4px;
            text-align: left;
        }

        .health-table th {
            background-color: #f2f2f2;
            text-align: center;
        }

        /* Pernyataan dan persetujuan */
        .agreement-section ol {
            padding-left: 20px;
            margin: 0;
        }

        .agreement-section li {
            margin-bottom: 5px;
            text-align: justify;
        }

        /* Area tanda tangan */
        .signature-table {
            width: 100%;
            margin-top: 40px;
        }

        .signature-table td {
            text-align: center;
            width: 33.33%;
            padding-top: 50px;
            border-top: 1px solid #333;
        }

        /* Class untuk memaksa pindah halaman */
        .page-break {
            page-break-after: always;
        }
    </style>

</head>

<body>
    <div class="header">
        <table style="width: 100%;">
            <tr>
                <td><img src="google.png" alt="MSIG Logo" style="height: 25px;"></td>
                <!-- <td class="text-right"><strong>PT MSIG Life Insurance Indonesia Tbk</strong></td> -->
            </tr>
        </table>
    </div>

    <div class="footer">
        <table style="width: 100%;">
            <tr>
                <td>SPAJK/KPR Umum/07/2025/1-2 Ver 14</td>
                {{-- <td class="text-right">Halaman <span class="page-number"></span></td> --}}
            </tr>
        </table>
    </div>

    <main style="margin: 1em">
        <h2 class="text-right"><strong>PT MSIG Life Insurance Indonesia Tbk</strong></h2>
        <h3 class="main-title">SURAT PERMINTAAN ASURANSI JIWA KREDIT</h3>

        <div class="section-title">I. DATA CALON PESERTA</div>
        <table class="form-table">
            <tr>
                <td class="label">1. Nama Lengkap</td>
                <td class="value">
                    {{ $data['nama_lengkap'] ?? '..................................................................' }}
                </td>
                <td class="label">11. Pekerjaan</td>
                <td class="value">{{ $data['pekerjaan'] ?? '............................................' }}</td>
            </tr>
            <tr>
                <td class="label">2. Nama Alias</td>
                <td class="value">
                    {{ $data['nama_alias'] ?? '..................................................................' }}
                </td>
                <td class="label">Nama Perusahaan</td>
                <td class="value">{{ $data['nama_perusahaan'] ?? '......................................' }}</td>
            </tr>
            <tr>
                <td class="label">3. Jenis Kelamin</td>
                <td class="value-nb">
                    <span class="checkbox">☐ Pria</span>
                    <span class="checkbox">☐ Wanita</span>
                </td>
                <td class="label">Alamat Kantor</td>
                <td class="value">{{ $data['alamat_kantor'] ?? '......................................' }}</td>
            </tr>
            <tr>
                <td class="label">4. Tempat/Tgl Lahir</td>
                <td class="value">
                    {{ $data['ttl'] ?? '..................................................................' }}</td>
                <td class="label">12. No. Handphone</td>
                <td class="value">{{ $data['no_hp'] ?? '............................................' }}</td>
            </tr>
            <tr>
                <td class="label">5. No. Bukti Identitas</td>
                <td class="value">
                    {{ $data['no_ktp'] ?? '..................................................................' }}</td>
                <td class="label">13. Alamat Email</td>
                <td class="value">{{ $data['email'] ?? '............................................' }}</td>
            </tr>
            <tr>
                <td class="label">9. Alamat Rumah</td>
                <td colspan="3" class="value">
                    {{ $data['alamat_rumah'] ?? '................................................................................................................................' }}
                </td>
            </tr>
        </table>

        <div class="section-title">II. DATA ASURANSI</div>
        <table class="form-table">
            <tr>
                <td class="label">1. Jumlah Kredit</td>
                <td class="value">{{ $data['jumlah_kredit'] ?? '................................................' }}
                </td>
                <td class="label">3. Masa Asuransi</td>
                <td class="value">{{ $data['masa_asuransi'] ?? '......................................' }}</td>
            </tr>
            <tr>
                <td class="label">2. Jenis Kredit</td>
                <td class="value-nb">
                    <span class="checkbox">☐ KPR</span>
                    <span class="checkbox">☐ KWU</span>
                    <span class="checkbox">☐ KTA</span>
                </td>
                <td class="label">4. Periode Asuransi</td>
                <td class="value">{{ $data['periode_asuransi'] ?? '......................................' }}</td>
            </tr>
        </table>

        <div class="section-title">III. DATA KESEHATAN</div>
        <table class="health-table">
            <thead>
                <tr>
                    <th style="width: 50%;">PERTANYAAN</th>
                    <th style="width: 25%;">JAWABAN</th>
                    <th style="width: 25%;">KETERANGAN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1. a. Berat Badan: .......... Kg, Tinggi Badan: .......... Cm<br> b. Apakah berat badan Anda
                        berubah dalam 12 bulan terakhir?</td>
                    <td class="text-center">☐ Ya / ☐ Tidak</td>
                    <td></td>
                </tr>
                <tr>
                    <td>2. Apakah Anda sedang dalam keadaan sehat?</td>
                    <td class="text-center">☐ Ya / ☐ Tidak</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3. Apakah Anda pernah menderita Jantung, Darah Tinggi, Stroke, Tumor, Kanker, TBC, Hepatitis,
                        Kencing Manis, Ginjal, Cacat, dsb?</td>
                    <td class="text-center">☐ Ya / ☐ Tidak</td>
                    <td></td>
                </tr>
                <tr>
                    <td>4. Apakah dalam 5 tahun terakhir Anda pernah rawat inap/operasi/biopsi/pemeriksaan lab?</td>
                    <td class="text-center">☐ Ya / ☐ Tidak</td>
                    <td></td>
                </tr>
                <tr>
                    <td>5. (Wanita) Apakah Anda sedang hamil?</td>
                    <td class="text-center">☐ Ya / ☐ Tidak</td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <div class="page-break"></div>

        <div class="section-title">IV. PERNYATAAN DAN PERSETUJUAN</div>
        <div class="agreement-section">
            <p>Saya Calon Peserta (Debitur/Penerima Fasilitas Kredit):</p>
            <ol>
                <li>Memahami bahwa saya memiliki kewajiban untuk bertindak dengan iktikad terbaik...</li>
                <li>Mengungkapkan bahwa informasi pribadi Saya, Data Perusahaan yang tercantum...</li>
                <li>Mengerti dan memahami bahwa Asuransi Jiwa Kredit Kumpulan merupakan produk asuransi...</li>
                <li>Menyatakan bahwa pembayaran premi... tidak berasal dari/untuk tujuan pidana pencucian uang...</li>
                <li>Memahami dan menyetujui untuk memenuhi peraturan perundang-undangan yang mengatur tentang Tindak
                    Pidana Anti Pencucian Uang...</li>
            </ol>
        </div>

        <table class="signature-table">
            <tr>
                <td>Petugas Bank</td>
                <td>Calon Peserta</td>
                <td>Pasangan Calon Peserta</td>
            </tr>
            <tr>
                <td>Nama Jelas & Tanda Tangan</td>
                <td>Nama Jelas & Tanda Tangan</td>
                <td>Nama Jelas & Tanda Tangan</td>
            </tr>
        </table>

    </main>

    <!-- <script type="text/php">
        if (isset($pdf)) {
            $text = "Halaman {PAGE_NUM} dari {PAGE_COUNT}";
            $size = 8;
            $font = $fontMetrics->getFont("DejaVu Sans", "normal");
            $width = $fontMetrics->get_text_width($text, $font, $size) / 2;
            $x = ($pdf->get_width() - $width) - 40;
            $y = $pdf->get_height() - 30;
            $pdf->page_text($x, $y, $text, $font, $size);
        }
    </script> -->
</body>

</html>
