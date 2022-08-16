@extends('backend.layouts.main')
@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-lg-8">
            <h2 class="text-decoration-none">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Kembali</a>
            <a href="/dashboard/posts" class="btn btn-warning text-white"><i class="bi bi-pencil-square"></i> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('are you sure you want to delete')"><i
                        class="bi bi-x-circle-fill"></i>Hapus</button>
            </form>
            <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid my-3" width="1200" height="400"
                class="card-img-top" alt="...">

            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
            </article>
        </div>
    </div>
</div>
@endsection