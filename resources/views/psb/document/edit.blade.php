@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Dokumen</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/cekdokumen/{{ $document->id }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="pas_foto" class="form-label @error('pas_foto') is-invalid @enderror mb-3">Pas Foto</label>
                @if ($document->pas_foto)
                    <img src="{{ asset('storage/' . $document->pas_foto) }}" class="img-preview img-fluid d-block mb-3 col-sm-5" id="frame" style="max-height: 500px; oferflow:hidden;">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5" id="frame" style="max-height: 500px; oferflow:hidden;">
                @endif
                <input class="form-control" type="file" id="pas_foto" name="pas_foto" onchange="preview()">
                @error('pas_foto')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="akta" class="form-label @error('akta') is-invalid @enderror mb-3">Akta</label>
                <input class="form-control" type="file" id="akta" name="akta">
                @error('akta')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="piagam" class="form-label @error('piagam') is-invalid @enderror mb-3">Piagam</label>
                <input class="form-control" type="file" id="piagam" name="piagam">
                @error('piagam')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="nilai" class="form-label @error('nilai') is-invalid @enderror mb-3">Nilai</label>
                <input class="form-control" type="file" id="nilai" name="nilai">
                @error('image')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script>
        function preview(){
            frame.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection