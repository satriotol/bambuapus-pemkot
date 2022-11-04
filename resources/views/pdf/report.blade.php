<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="center">
        <p>FORM VITASI "BAMBU APUS" DINAS PENDIDIKAN KOTA SEMARANG</p>
        <p>(BERGERAK BERSAMA BANTU ANAK PUTUS SEKOLAH)</p>
    </div>
    <table>
        <tbody>
            <tr>
                <td>Sumber Laporan</td>
                <td>:</td>
                <td>Website : http://bambuapus.semarangkota.go.id/</td>
            </tr>
            <tr>
                <td>Tanggal Laporan Masuk</td>
                <td>:</td>
                <td>{{ $user_report->created_at }}</td>
            </tr>
            <tr>
                <td>Tanggal Proses</td>
                <td>:</td>
                <td>{{ $user_report->getReportStatusLast() }}</td>
            </tr>
        </tbody>
    </table>
    <div>
        <p style="font-weight: bold">
            Data Pelapor
        </p>
        <table>
            <tr>
                <td>Nama | E-mail</td>
                <td>:</td>
                <td>{{ $user_report->user->name }} | {{ $user_report->user->email }}</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td>{{ $user_report->user->user_detail->nik }}</td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td>:</td>
                <td>{{ $user_report->user->user_detail->phone }}</td>
            </tr>
        </table>
    </div>
    <div>
        <p style="font-weight: bold">
            Data Anak
        </p>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $user_report->name }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $user_report->gender }}</td>
            </tr>
            <tr>
                <td>Nama Orang Tua</td>
                <td>:</td>
                <td>{{ $user_report->parent }}</td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td>:</td>
                <td>{{ $user_report->phone }}</td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td>{{ $user_report->age }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $user_report->address }}</td>
            </tr>
            <tr>
                <td>Kelurahan</td>
                <td>:</td>
                <td>{{ $user_report->kelurahan->nama_kelurahan }}</td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td>{{ $user_report->kelurahan->kecamatan->nama_kecamatan }}</td>
            </tr>
        </table>
    </div>
    <div>
        <p style="font-weight: bold">
            Data Visitasi
        </p>
        <table>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Nama Anak</td>
                    <td>:</td>
                    <td>........................................................................................................................
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>NIK</td>
                    <td>:</td>
                    <td>........................................................................................................................
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Pernah Sekolah</td>
                    <td>:</td>
                    <td>Ya / Tidak
                    </td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Sekolah Asal</td>
                    <td>:</td>
                    <td>........................................................................................................................
                    </td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Tanggal Putus Sekolah</td>
                    <td>:</td>
                    <td>........................................................................................................................
                    </td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Alasan Putuh Sekolah</td>
                    <td>:</td>
                    <td>........................................................................................................................
                    </td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Pernah Memiliki Raport</td>
                    <td>:</td>
                    <td>Ya / Tidak (Lampirkan Jika Ada)
                    </td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>Tinggal Dengan</td>
                    <td>:</td>
                    <td>........................................................................................................................
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <p style="font-weight: bold">
            Rekomendasi Hasil Visitasi
        </p>
        ......................................................................................................................................................
        <br>
        ......................................................................................................................................................
        <br>
        ......................................................................................................................................................
        <br>
        ......................................................................................................................................................
        <br>
        ......................................................................................................................................................
        <br>
        ......................................................................................................................................................
        <br>
    </div>
    <table>
        <tr>
            <td>Lampiran</td>
            <td>:</td>
            <td>1. FC KK ( )</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>2. FC Ijazah Jika Punya ( )</td>
        </tr>
        <tr>
            <td>Tanggal Visitasi</td>
            <td>:</td>
            <td>.......................................</td>
        </tr>
        <tr>
            <td>Petugas & Tanda Tangan</td>
            <td>:</td>
            <td>.......................................</td>
        </tr>
    </table>
</body>

</html>
