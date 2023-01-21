@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                    <h2 class="mb-3">{{ $event->title }}</h2>
                        @if ($event->image)
                            <div class="max-height : 350px; overflow : hidden;">
                                <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/1100x350?event" class="img-fluid">
                        @endif
                <article class="my-3 fs-5">
                    <p>{!! $event->desc !!}</p>
                    <a href="{{ $event->link }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                </article>
            </div>
        </div>
    </div>



@endsection