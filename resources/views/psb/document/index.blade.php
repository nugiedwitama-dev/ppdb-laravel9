@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
  </div>
  @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-6" role="alert">
           {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    @endif
  <div class="table-responsive col-lg-6">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Pas Foto</th>
          <th scope="col">Akta</th>
          <th scope="col">Piagam</th>
          <th scope="col">Nilai</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($documents as $document)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $document->nama }}</td>
          <td><a href="/{{ $document->pas_foto }}"><span data-feather="image"></span></a></td>
          <td><a href="/{{ $document->akta }}"><span data-feather="file"></span></a></td>
          <td><a href="/{{ $document->piagam }}"><span data-feather="file"></span></a></td>
          <td><a href="/{{ $document->nilai }}"><span data-feather="file"></span></a></td>
          <td>
            <a class="badge bg-warning" href="/dashboard/cekdokumen/{{ $document->id }}/edit"><span data-feather="edit"></span></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    
@endsection