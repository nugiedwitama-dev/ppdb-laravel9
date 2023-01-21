@extends('layouts.main')

      @section('container')
      <div class="card mb-5">
        <img src="https://source.unsplash.com/700x250?student" class="card-img-top">
        <div class="card-body text-center">
          <h2 class="card-title">PPDB Online SMK SEMAK SEMAK</h2>
          <p class="card-text">Untuk calon pendaftar tahun ajaran 2023/2024 bisa mendaftar melalui website ini atau langsung ke tempat pendaftaran SMK SEMAK SEMAK</p>
          <a href="/psb/formulir" class="text-decoration-none btn btn-primary">Daftar Sekarang</a>
        </div>
        </div>
      <div class="card mb-5">
        <img src="https://source.unsplash.com/700x250?post" class="card-img-top">
        <div class="card-body text-center">
          <h2 class="card-title">BLOG SMK SEMAK SEMAK</h2>
          <p class="card-text">Dapatkan informasi terbaru tentang pendaftaran, kegiatan, berita, dan update terbaru dari SMK SEMAK SEMAK</p>
          <a href="/blog" class="text-decoration-none btn btn-primary">SELENGKAPNYA</a>
        </div>
        </div>
      @endsection
