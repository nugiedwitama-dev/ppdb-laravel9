@extends('dashboard.layouts.main')

@section('container')

@foreach ($data as $dt)

<center>
            <h4 class="mt-4">
                Kartu Tes Seleksi Calon Peserta Didik <br>
                SMK SEMAK SEMAK
            </h4>
</center>
            <p style="font-weight: bold"> Nama         :  {{  $dt->nama }} <br>
                
                Tempat Test  : SMK SEMAK-SEMAK <br>
                Jadwal Test  : 12 Februari 2023 <br>
    <small>*cetak kartu dengan kertas cover berwarna merah muda dan wajib dibawa saat test</small>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>No Peserta</th>
            <th>Nama Peserta</th>
            <th>Tanggal Pendaftaran</th>
            <th>Nama Instruktur</th>
            <th>Ruangan</th>
            <th>Ttd Peserta</th>
            <th>Ttd Instruktur</th>
        </thead>
        <tbody>
            <td>{{ 'KTNO-00'.$dt->id }} <br></td>
            <td>{{ $dt->nama }} <br></td>
            <td>{{ $dt->created_at }} <br></td>
            <td>Mau Diayun Nda, S.Pd. M.Kom.</td>
            <td>Laboratorium 1</td>
            <td>{{ "   " }}</td>
            <td>{{ "   " }}</td>
        </tbody>
    </table>
@endforeach
    <div class="block d-block">
        <div class="row">
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
    </div>
    <a class="btn btn-primary" href="/dashboard/cetakkartu/pdf">Cetak Kartu</a>
@endsection