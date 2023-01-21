@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
  </div>
  @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
     {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
@can('registrar')
    <h4 class="mt-5">Akun anda sedang dalam proses verivikasi, mohon tunggu sampai akun anda aktif 
      <span><a href="/dashboard/cekdokumen">Cek Dokumen</a></span> </h4>
@endcan
@can('verified')
      <h4 class="mt-5">Akun anda berhasil diaktifasi, silahkan download kartu Test Seleksi melalui halaman 
        <a href="/dashboard/cetakkartu">Cetak Kartu</a>.</h4>
@endcan
@endsection