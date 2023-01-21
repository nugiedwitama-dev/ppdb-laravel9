@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row mb-5 mt-3">
        <div class="col-lg-8">
                <h2 class="mb-3">{{ $event->title }}</h2>
                    <a href="/dashboard/event" class="btn btn-success"> <span data-feather="arrow-left"></span> Kelola postingan</a>
                    <a href="/dashboard/event/{{ $event->slug }}/edit" class="btn btn-warning"> <span data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/event/{{ $event->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">
                          <span data-feather="trash"></span>Delete
                        </button>
                      </form>
                      @if ($event->image)
                        <div class="max-height : 350px; overflow : hidden;">
                            <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid mt-3">
                        </div>
                      @else
                        <img src="https://source.unsplash.com/1100x350?event" class="img-fluid mt-3">
                      @endif
            <article class="my-3 fs-5">
                <p>{!! $event->desc !!}</p>
                <a href="{{ $event->link }}" class="btn btn-primary btn-sm">Selengkapnya</a>
            </article>
        </div>
    </div>
</div>
    
@endsection