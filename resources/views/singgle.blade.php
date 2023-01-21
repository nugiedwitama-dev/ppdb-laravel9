@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                    <h2 class="mb-3">{{ $post->title }}</h2>
                    <h5> By <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> In 
                        <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">
                            {{ $post->category->name }}</a> </h5>
                        @if ($post->image)
                            <div class="max-height : 350px; overflow : hidden;">
                                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/1100x350?{{ $post->category->name }}" class="img-fluid">
                        @endif
                <article class="my-3 fs-5">
                    <p>{!! $post->body !!}</p>
                </article>
            </div>
        </div>
    </div>



@endsection