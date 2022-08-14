@extends('frontend.layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-decoration-none">{{ $post->title }}</h2>

            <img src="{{ asset('storage/'.$post->image) }}" class="" width="850" height="300" class="card-img-top"
                alt="...">
            <article class="my-3 fs-5">
                <p>{!! $post->excerpt !!}</p>
            </article>
        </div>
    </div>
</div>
@endsection