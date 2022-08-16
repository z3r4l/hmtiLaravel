@extends('backend.layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Struktur</h1>
</div>

<div class="col-lg-8">
    <form method="post" class="mb-5" action="/dashboard/strukturs" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control @error('name')
                is-invalid
            @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
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
            @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control @error('jabatan')
                is-invalid
            @enderror" id="jabatan" name="jabatan" required value="{{ old('jabatan') }}">
            @error('jabatan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="divisi" class="form-label">Divisi</label>
            <select class="form-select" name="divisi_id">
                @foreach ($divisi as $row)
                <option value="{{ $row->id }}" {{ old('divisi_id')==$row->id ? ' selected' : ' ' }} >{{
                    $row->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5 d-block" src="" alt="">
            <input class="form-control @error('image')
                is-invalid
            @enderror" type="file" id="image" name="image" onchange="previewImage()" required>
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
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

       function previewImage(){
        
        const imgPreview = document.querySelector('.img-preview')

        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }
</script>
@endsection