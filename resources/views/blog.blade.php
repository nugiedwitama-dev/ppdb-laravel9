@extends('layouts.main')
@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>
    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-md-6">
          <form action="/blog">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Serach" name="search" value="{{ request('search') }}">
              <button class="btn btn-danger" type="submit" >Search</button>
            </div>
          </form>
        </div>
      </div>
    <div class="row">
      @foreach ($posts as $post)
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="position-absolute  bg-dark px-3 py-2 text-white" 
            style="background-color: rgba(0.7,0.7,0.7,0.7); opacity:70%">
            <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none text-white">
              {{ $post->category->name }}</a>
            </div>
            @if ($post->image)
              <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid">
            @else
              <img src="https://source.unsplash.com/600x400?computers" class="img-fluid">
            @endif
          <div class="card-body">
            <h2 class="card-title"> <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
              {{ $post->title }}</a></h2>
            <p> By <a href="/blog?author={{ $post->author->username }}" 
              class="text-decoration-none">{{ $post->author->name }}</a>
              {{ $post->created_at->diffForHumans() }}
            </small></p>
            <p class="card-text">{{ $post->exc }}</p>
            <a href="{{ $post->slug }}" class="btn btn-primary">Read More...</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="d-flex justify-content-center">
    {{ $posts->links() }}
  </div>
@endsection