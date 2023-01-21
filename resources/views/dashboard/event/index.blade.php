@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
  </div>
  <a href="/dashboard/event/create" class="btn btn-primary mb-3">Tambah Event</a>
  @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
           {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    @endif
  <div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($event as $ev)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $ev->title }}</td>
          <td>
            <a class="badge bg-info" href="/dashboard/event/{{ $ev->slug }}"><span data-feather="eye"></span></a>
            <a class="badge bg-warning" href="/dashboard/event/{{ $ev->slug }}/edit"><span data-feather="edit"></span></a>
            <form action="/dashboard/event/{{ $ev->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin?')">
                <span data-feather="trash"></span>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    
@endsection