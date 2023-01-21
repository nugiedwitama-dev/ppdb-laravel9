@extends('layouts.main')

@section('container')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
   {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="container d-block justify-content-center">
    <center>
        <h1 class="mb-5">Verifikasi</h1>
        <div class="card">
            <h2 class="mb-5">
                Lakukan Pembayaran Untuk Aktivasi Akun
            </h2>
            <p class="mb-5">Untuk mengaktivasi akun anda silahkan lakukan pembayaran melalui rekening di bawah ini :</p>
            <div class="row d-flex">
                <div class="col-sm-2">
                    <ul>
                        <h4></h4>Bank BRI
                        <p>67365425672 a/n Nugie Dwitama</p> 
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul>
                        <h4>Bank BCA</h4>
                        <p>67365425672 a/n Nugie Dwitama</p>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul>
                        <h4>Bank BNI</h4>
                        <p>67365425672 a/n Nugie Dwitama</p>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul>
                        <h4>Bank JATENG</h4>
                        <p>67365425672 a/n Nugie Dwitama</p>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul>
                        <h4>Bank MANDIRI</h4>
                        <p>67365425672 a/n Nugie Dwitama</p>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul>
                        <h4>E WALLET</h4>
                        <p>67365425672 a/n Nugie Dwitama</p>
                    </ul>
                </div>
                <center>
                <div class="col-lg-6">
                    <form action="/psb/payment/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <h2>Upload Bukti Pembayaran</h2>
                        <div class="mb-3">
                            <label for="nama_siswa" class="form-label">Nama Siswa</label>
                            <input type="text" name="nama_siswa" class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa"
                                required value="{{ old('nama_siswa') }}">
                            @error('nama_siswa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_pengirim" class="form-label">Nama Pengiruim</label>
                            <input type="text" name="nama_pengirim" class="form-control @error('nama_pengirim') is-invalid @enderror" id="nama_pengirim"
                                required value="{{ old('nama_pengirim') }}">
                            @error('nama_pengirim')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="bank" class="form-label">Bank</label>
                            <select name="bank" id="bank" class="form-control @error('bank') is-invalid @enderror">
                                <option value="bri">Bank BRI</option>
                                <option value="bca">Bank BCA</option>
                                <option value="bni">Bank BNI</option>
                                <option value="jateng">Bank JATENG</option>
                                <option value="mandiri">Bank MANDIRI</option>
                                <option value="e-wallet">E-Wallet</option>
                            </select>
                                
                            @error('bank')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="bukti" class="form-label @error('bukti') is-invalid @enderror mb-3">Bukti Transfer 
                                <span class="text-danger">*jpg</span></label>
                            <input class="form-control" type="file" id="bukti" name="bukti">
                            @error('bukti')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                          </div>
                          <button type="submit" class="btn btn-primary mb-5">Submit</button>
                    </form>
                    </center>
                </div>
            </div>
        </div>
    </center>
</div>

@endsection