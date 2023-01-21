<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
@foreach ($data as $dt)
<div class="container-fluid">

<center>
            <h4 class="mt-4">
                Kartu Tes Seleksi Calon Peserta Didik <br>
                SMK SEMAK SEMAK
            </h4>
</center>
            <p class="mb-3" style="font-weight: bold"> Nama         :  {{  $dt->nama }} <br>
                Tempat Test  : SMK SEMAK-SEMAK <br>
                Jadwal Test  : 12 Februari 2023 <br>
            </p>
    <small class="mt-4">*cetak kartu dengan kertas cover berwarna merah muda dan wajib dibawa saat test</small>
    <table class="table table-bordered table-striped table-hover mb-5">
        <thead>
            <th>No Peserta</th>
            <th>Nama Peserta</th>
            <th>Tanggal Pendaftaran</th>
            <th>Ruangan</th>
            <th>Ttd Peserta</th>
            <th>Ttd Instruktur</th>
        </thead>
        <tbody>
            <td>{{ 'KTNO-00'.$dt->id }} <br></td>
            <td>{{ $dt->nama }} <br></td>
            <td>{{ $dt->created_at }} <br></td>
            <td>Lab 1</td>
            <td>{{ " " }}</td>
            <td>{{ " " }}</td>
        </tbody>
    </table>
@endforeach
<center>
    <div class="block d-block">
        <div class="row d-flex">
            <div class="col-sm-4">
                <p><strong>Ketua Penyelenggara</strong></p>
                <img src="/img/ttd.png" width="100" height="100">
                <p><strong>Aman nda man oyo,M.Pd. </strong></p>
            </div>
            <div class="col-sm-4">
                <p><strong>Kepala Kesiswaan</strong></p>
                <img src="/img/ttd.png" width="100" height="100">
                <p><strong>Aman nda man oyo,M.Pd. </strong></p>
            </div>
            <div class="col-sm-4">
                <p><strong>Kepala Sekolah</strong></p>
                <img src="/img/ttd.png" width="100" height="100">
                <p><strong>Aman nda man oyo,M.Pd. </strong></p>
            </div>
        </div>
    </center>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
<script>
    window.print()
</script>
</body>
</html>