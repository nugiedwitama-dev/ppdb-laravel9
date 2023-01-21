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
          <th scope="col">Status</th>
          <th scope="col">Bukti Transfer</th>
          <th scope="col">Pas Foto</th>
          <th scope="col">Akta</th>
          <th scope="col">Piagam</th>
          <th scope="col">Nilai</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($statuses as $status)
          <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $status->name}}</td>
          <td>
            @if($status->level === 'registrar')
            Unnactive
            @else
            Active
            @endif
        </td>
        <td>
          @if($status->level === '')
            Tidak ditemukan
            @else
            <a href="/{{ $status->bukti }}"><span data-feather="image"></span></a>
            @endif
        </td>
        <td><a href="/{{ $status->pas_foto }}"><span data-feather="image"></span></a></td> 
        <td><a href="/{{ $status->akta }}"><span data-feather="file"></span></a></td> 
        <td><a href="/{{ $status->piagam }}"><span data-feather="file"></span></a></td> 
        <td><a href="/{{ $status->nilai }}"><span data-feather="file"></span></a></td> 
        <td><form action="/dashboard/managepsb/{{ $status->id }}" method="post" class="d-inline">
          @method('put')
          @csrf
          <button class="badge bg-success border-0" onclick="return confirm('Apakah anda yakin?')">
            <span data-feather="check-circle"></span>
          </button>
        </form>
      </td></td>
      </tr> 
      @endforeach
      </tbody>
    </table>
  </div>
    
@endsection