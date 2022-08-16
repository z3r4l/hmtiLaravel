@extends('backend.layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Divisi</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/divisi/{{ $divisi->slug }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name')
                is-invalid
            @enderror" id="name" name="name" required autofocus value="{{ old('name', $divisi->name) }}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug')
                is-invalid
            @enderror" id="slug" name="slug" readonly required value="{{ old('slug', $divisi->slug) }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">divisi Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5 d-block" src="{{ asset('storage/' . $divisi->image) }}"
                alt="">
            <input class="form-control @error('image')
                is-invalid
            @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body',$divisi->body) }}" required>
            <trix-editor input="body"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Update divisi</button>
    </form>
</div>

<script>
    const name = document.querySelector("#name");
        const slug = document.querySelector("#slug");

        name.addEventListener("keyup", function() {
            let preslug = name.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault( )
    })

    function previewImage(){
        
        const imgPreview = document.querySelector('.img-preview')

        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }
</script>
@endsection