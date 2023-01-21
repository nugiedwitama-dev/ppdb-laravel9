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
        @foreach ($documents as $document)
        <td>
        @if($document->bukti_transfer)
        <a href="{{ $document->bukti_transfer }}"><span data-feather="image"></span></a>
        @else
        Tidak Ditemukan
        @endif
        </td>   
        </tr>
        @endforeach
        @endforeach
      
      </tbody>
    </table>
  </div>
    
@endsection