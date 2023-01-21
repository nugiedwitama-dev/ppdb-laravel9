@extends('dashboard.layouts.main')

@section('container')
<style>
    </style>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Event</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/event/{{ $event->slug }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
                    required autofocus value="{{ old('title', $event->title )}}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug"
                    required value="{{ old('slug', $event->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label @error('slug') is-invalid @enderror mb-3">Featrured Images / Thumbnail</label>
                <input type="hidden" name="oldImage" value="{{ $event->image }}">
                @if ($event->image)
                    <img src="{{ asset('storage/' . $event->image) }}" class="img-preview img-fluid d-block mb-3 col-sm-5" id="frame" style="max-height: 500px; oferflow:hidden;">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5" id="frame" style="max-height: 500px; oferflow:hidden;">
                @endif
                <input class="form-control" type="file" id="image" name="image" onchange="preview()">
                @error('image')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Deskripsi</label>
                    <input id="desc" type="hidden" name="desc" value="{{ old('desc', $event->desc) }}">
                    <trix-editor input="desc"></trix-editor>
                    @error('desc')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" id="link"
                    required value="{{ old('link', $event->link) }}">
                @error('link')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Publish</button>
        </form>
    </div>
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function(){
            fetch('/dashboard/post/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        });
        function preview(){
            frame.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>
    
@endsection