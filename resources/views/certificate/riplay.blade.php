<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>RIPLAY Personal - MSIG Life</title>
    <style>
        #background {
            position: fixed;
            /* top: -15mm; */
            /* Sesuaikan dengan margin @page */
            /* left: -15mm; */
            /* Sesuaikan dengan margin @page */
            width: 100%;
            height: 100%;
            z-index: -1000;
        }

        #background img {
            width: 210mm;
            /* Lebar A4 */
            height: 297mm;
            /* Tinggi A4 */
        }

        * {
            margin: 0;
            padding: 0;
        }

        @page {
            size: A4;
            margin: 15mm;
        }

        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            font-size: 7pt;
            line-height: 1.4;
            color: #000;
        }

        .header {
            text-align: center;
            margin-bottom: 15px;
            border-bottom: 2px solid #003d82;
            padding-bottom: 10px;
        }

        .header h1 {
            font-size: 14pt;
            color: #003d82;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .header h2 {
            font-size: 12pt;
            color: #003d82;
            font-weight: bold;
        }

        .section-title {
            background-color: #003d82;
            color: white;
            padding: 5px 10px;
            font-weight: bold;
            font-size: 9pt;
            margin: 15px 0 10px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .th {
            background-color: #003d82;
            color: white;
            text-align: center;
            font-weight: bold;
            border: 1px solid black;
        }

        table.data-table td {
            padding: 1px;
            border: 1px solid black;
            word-wrap: break-word;
            font-size: 6.5pt;
        }

        .form-row {
            margin: 5px 0;
        }

        .form-label {
            display: inline-block;
            width: 40%;
            padding: 5px 0;
        }

        .form-value {
            display: inline-block;
            width: 58%;
            padding: 5px 0;
            border-bottom: 1px solid #000;
        }

        .benefit-box {
            border: 1px solid #003d82;
            padding: 10px;
            margin: 10px 0;
            background-color: #f5f5f5;
        }

        .benefit-box h3 {
            color: #003d82;
            font-size: 11pt;
            margin-bottom: 8px;
        }

        .footer-contact {
            margin-top: 20px;
            font-size: 6pt;
            text-align: center;
            line-height: 1.5;
            border-top: 1px solid #003d82;
            padding-top: 10px;
        }

        .page-break {
            page-break-after: always;
        }

        td {
            vertical-align: top;
        }

        p {
            margin: 8px 0;
        }

        ul {
            margin-left: 20px;
            margin-top: 5px;
        }

        ul li {
            margin: 3px 0;
        }

        .page {
            padding: 0 7.5em;
        }

        .sub-title {
            text-align: left;
            font-size: 7.8pt;
            background-color: transparent;
            color: black;
        }

        .footer {
            position: fixed;
            text-align: center;
            bottom: 9.5mm;
            /* Samakan dengan margin bawah @page agar pas */
            left: 8mm;
            /* Samakan dengan margin kiri @page */
            right: 15mm;
            /* Samakan dengan margin kanan @page */
            font-size: 7pt;
            line-height: 1.2;
            /* Sesuaikan jarak antar baris */
        }
    </style>
</head>

<body>

    <div id="background">
        <img src="{{ public_path('assets/images/certificates/msig/background/Final RIPLAY Personal Unfilled Form_6.png') }}">
    </div>

    <!-- HALAMAN 1 -->
    <div class="page" style="margin-top: 10em">
        <div
            style="text-align: center; font-size: 11pt; margin: 0em 2em; font-weight: bold; letter-spacing: -0.4px; line-height: 1.1em;">
            RINGKASAN INFORMASI PRODUK DAN LAYANAN (RIPLAY) PERSONAL ASURANSI JIWA KREDIT
        </div>

        <div style="text-align: justify; font-size: 7.9pt; margin: 1em 2em 1em 0; line-height: 1em;">
            <strong>Asuransi Jiwa Kredit Kumpulan (Mortgage Redemption Insurance/MRI)</strong> merupakan produk Asuransi
            jiwa kredit yang
            memberikan perlindungan jiwa karena Penyakit dan/atau Kecelakaan berupa uang pertanggungan menurun selama
            masa asuransi.
        </div>

        {{-- <div class="section-title">Data Pemegang Polis dan Calon Tertanggung</div> --}}

        <table style="margin-bottom: 10px; border-collapse: collapse; margin: 0; padding: 0">
            <thead>
                <thead class="section-title" style="height: 50em">
                    <tr>
                        <th class="sub-title" colspan="7">Data Pemegang Polis dan Calon Tertanggung</th>
                    </tr>
                    <tr>
                        <th width="60%" colspan="3"
                            style="text-align: left; padding: 1em;background-color: rgb(28, 7, 97); color: white; border: 1px solid black; font-size: 8pt;">
                            Data Pemegang Polis
                        </th>

                        <th width="2%" style="background-color: transparent"></th>

                        <th width="60%" colspan="3"
                            style="text-align: left; padding: 1em;background-color: rgb(28, 7, 97); color: white; border: 1px solid black; font-size: 8pt;">
                            Data Calon Tertanggung
                        </th>
                    </tr>
                </thead>
            </thead>
            <tbody>
                <tr>
                    <td width="30%" style="border: 1px solid black; padding-left: 1em" rowspan="4">Nama Pemegang Polis
                    </td>
                    <td width="3%" style="border: 1px solid black; text-align: center" rowspan="4">:</td>
                    <td width="50%" style="border: 1px solid black; padding-left: 1em" rowspan="4"></td>
                    <td width="7%" rowspan="4"></td>
                    <td width="30%" style="border: 1px solid black; padding: 1em">Nama</td>
                    <td width="3%" style="border: 1px solid black; text-align: center">:</td>
                    <td width="50%" style="border: 1px solid black; padding: 1em">{{ $student['name'] }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding: 1em">Tanggal Lahir</td>
                    <td style="border: 1px solid black; text-align: center">:</td>
                    <td style="border: 1px solid black; padding: 1em"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding: 1em">Usia</td>
                    <td style="border: 1px solid black; text-align: center">:</td>
                    <td style="border: 1px solid black; padding: 1em"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding: 1em">Jenis Kelamin</td>
                    <td style="border: 1px solid black; text-align: center">:</td>
                    <td style="border: 1px solid black; padding: 1em"></td>
                </tr>
            </tbody>
        </table>

        {{-- Tabel Manfaat Asuransi (juga perlu diperbaiki lebarnya) --}}

        <table class="data-table" style="margin: 15px 0;">
            <thead>
                <tr class="sub-title">
                    <th colspan="4" style=" text-align: left;">Tabel Manfaat Asuransi</th>
                </tr>
                <tr>
                    {{-- Lebar dihilangkan agar totalnya pas 100% --}}
                    <th class="th">Nama Produk Asuransi</th>
                    <th class="th">Masa Asuransi</th>
                    <th class="th">Jenis Pertanggungan</th>
                    <th class="th">Uang Pertanggungan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="30%" style="font-weight: bold; padding-left: 1em;">Asuransi Jiwa Kredit Kumpulan
                        (Mortgage Redemption
                        Insurance/MRI)</td>
                    <td width="30%" style="text-align: center; vertical-align: middle"> tahun</td>
                    <td width="30%" style="text-align: center; vertical-align: middle">Menurun</td>
                    <td width="30%" style="text-align: center; vertical-align: middle">Rp </td>
                </tr>
            </tbody>
        </table>

        {{-- Tabel Data Pembayaran Premi yang sudah diperbaiki --}}
        <table class="data-table">
            <thead>
                <tr style="background-color: transparent; color: black;">
                    <th colspan="3" class="sub-title"">Data Pembayaran Premi</th>
                </tr>
                <tr>
                    {{-- Atribut width dihilangkan dan colspan di atas disesuaikan menjadi 3 --}}
                    <th class=" th">Frekuensi Pembayaran Premi</th>
                    <th class="th">Mata Uang</th>
                    <th class="th">Total Premi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="40%" style="text-align: left; vertical-align: middle; padding: 1em">Sekaligus</td>
                    <td width="40%" style="text-align: left; vertical-align: middle; padding: 1em">Rupiah</td>
                    <td width="40%" style="text-align: left; vertical-align: middle; padding: 1em">Rp</td>
                </tr>
            </tbody>
        </table>

    </div>

</body>

</html>
