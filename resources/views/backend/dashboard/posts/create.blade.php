@extends('backend.layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
    <form method="post" class="mb-5" action="/dashboard/posts" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title')
                is-invalid
            @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug')
                is-invalid
            @enderror" id="slug" name="slug" readonly required value="{{ old('slug') }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class=" mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-control" name="category_id">
                <option class="text-muted" disabled selected style="display: none">--Select Category--</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id')==$category->id ? ' selected' : ' ' }} >{{
                    $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="link" class="form-label">Link Youtube <small>Masukan Bagian Belakang Link Saja | Contoh :
                    https://youtu.be/<span class="text-primary">uehf5EplrUs</span></small></label>
            <input type="text" placeholder="Contoh : uehf5EplrUs" class="form-control @error('link')
                is-invalid
            @enderror" id="link" name="link" required value="{{ old('link') }}">
            @error('link')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">
                Post Image
                <small><u>Recomended : 750X400</u></small>
            </label>
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
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body') }}" required>
            <trix-editor input="body"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>

<script>
    const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
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