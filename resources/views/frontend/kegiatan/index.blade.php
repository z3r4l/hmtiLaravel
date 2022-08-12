@extends('frontend.layouts.main')
@section('content')
<div class="container">
    <div class="d-flex justify-content-center my-5">
        <img src="/img/repository.jpeg" alt="Gambar Visi Misi" width="440" height="330" class="">
    </div>
    <h3 class="text-center fw-bold my-4"><span class="text-header d-block">KEGIATAN</span>HMTI UNIVERSITAS IBNU SINA
    </h3>
    <div class="row">

        <div class="container">
            <div class="row row-card">
                @foreach ($posts as $p)
                <div class="col-lg-4 col-12">
                    <div class="card-box p-4">
                        <img src="/img/hero-image.jpeg" class="card-img-top card-img" alt="...">
                        <h5 class="">{{ Str::limit($p->title,30) }}</h5>
                        <p class="">{!!Str::limit( $p->body , 80)!!}</p>
                        <a href="/posts/{{ $p->slug }}"
                            class="text-decoration-none btn button-color text-light d-inline-block">Read
                            More..</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-end">
    {{ $posts->links() }}
</div>
@endsection