@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Event</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/event/" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
                    required autofocus value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug"
                    required value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label @error('slug') is-invalid @enderror mb-3">Featrured Images / Thumbnail</label>
                <img class="img-preview img-fluid d-block mb-3 col-sm-5" id="frame" style="max-height: 500px; oferflow:hidden;">
                <input class="form-control" type="file" id="image" name="image" onchange="preview()">
                @error('image')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Deskripsi</label>
                <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" id="desc"
                    required value="{{ old('desc') }}"></textarea>
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" id="link"
                    required value="{{ old('link') }}">
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
            fetch('/dashboard/event/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        function preview(){
            frame.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>
    

    
@endsection