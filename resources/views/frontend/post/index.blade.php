@extends('frontend.layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-decoration-none">{{ $post->title }}</h2>

            <img src="https://source.unsplash.com/1200x400" class="img-fluid" width="1200" height="400"
                class="card-img-top" alt="...">
            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
            </article>
        </div>
    </div>
</div>
@endsection