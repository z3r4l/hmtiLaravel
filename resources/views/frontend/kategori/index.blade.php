@extends('frontend.layouts.main')
@section('content')
<div class="container">
    <div class="d-flex justify-content-center my-4">
        <img src="/img/repository.jpeg" alt="Gambar Visi Misi" width="440" height="330" class="">
    </div>
    <div class="row">
        <div class="container">
            <div class="row row-card">
                @foreach ($posts as $p)
                <div class="col-lg-4 col-12">
                    <a href="/posts/{{ $p->slug }}" class="text-decoration-none text-dark">
                        <div class="card-box p-4">
                            <img src="{{ asset('storage/'.$p->image) }}" class="card-img-top card-img card-img-kegiatan"
                                alt="...">
                            <h5 class="">{{ Str::limit($p->title,40) }}</h5>
                            <p class="card-text"><i class="bi bi-calendar"></i> <small>{{
                                    $p->created_at->diffForHumans()
                                    }}</small>
                            </p>
                            <p class="">{!!Str::limit( $p->excerpt , 80)!!}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection