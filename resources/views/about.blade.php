@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                    <h2 class="mb-3">{{ $abouts->title }}</h2>
                        @if ($abouts->image)
                            <div class="max-height : 350px; overflow : hidden;">
                                <img src="{{ $abouts->image }}" class="img-fluid">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/1100x350?abouts" class="img-fluid">
                        @endif
                <article class="my-3 fs-5">
                    <p>{!! $abouts->body !!}</p>
                </article>
            </div>
        </div>
    </div>



@endsection