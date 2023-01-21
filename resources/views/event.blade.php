@extends('layouts.main')
@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>


  @if ($event->count())
  <div class="card mb-3">
    @if ($event[0]->image)
    <div>
        <img src="{{ asset('storage/' . $event[0]->image) }}" class="img-fluid mt-3">
    </div>
  @else
  <img src="https://source.unsplash.com/900x350?event" class="card-img-top" alt="...">
  @endif
  <div class="card-body text-center">
    <h2 class="card-title"><a href="{{ $event[0]->slug }}" class="text-decoration-none text-dark">{{ $event[0]->title }}</a></h2>
    <small class="text-muted">
      <p class="card-text">{{ $event[0]->created_at->diffForHumans() }}</p> 
    </small>
    <p class="card-text">{{ $event[0]->exc }}</p>
    <a href="/event/{{ $event[0]->slug }}" class="text-decoration-none btn btn-primary">Read More..</a>
  </div>
  </div>

    <div class="row">
      @foreach ($event->skip(1) as $ev)
      <div class="col-md-4 mb-3">
        <div class="card">
            @if ($ev->image)
              <img src="{{ asset('storage/' . $ev->image) }}" class="img-fluid">
            @else
              <img src="https://source.unsplash.com/600x400?computers" class="img-fluid">
            @endif
          <div class="card-body">
            <h2 class="card-title"> <a href="/posts/{{ $ev->slug }}" class="text-decoration-none">
              {{ $ev->title }}</a></h2>
              {{ $ev->created_at->diffForHumans() }}
            </small></p>
            <p class="card-text">{{ $ev->exc }}</p>
            <a href="{{ $ev->slug }}" class="btn btn-primary">Read More...</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  @else
  <p class="text-center fs-4">No Post Found</p>
  @endif
  <div class="d-flex justify-content-center">
    {{ $event->links() }}
  </div>
@endsection