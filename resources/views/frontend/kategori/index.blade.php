@extends('frontend.layouts.main')
@section('content')
<div class="container">
    <div class="d-flex justify-content-center my-4">
        <img src="/img/repository.jpeg" alt="Gambar Visi Misi" width="440" height="330" class="">
    </div>
    <div class="container">
        <div id="post-data" class="row d-flex justify-content-center">
            @foreach ($posts as $p)
            <div class="col-lg-4 col-6 mt-4">
                <div class="card card-kegiatan shadow-sm h-100">
                    <div class="card-image-kegiatan">
                        <div class="hover-text">
                            <img src="{{ asset('storage/'.$p->image) }}" class="card-img-top" alt="...">
                        </div>
                        <div class="image-overlay"></div>
                    </div>
                    <div class="card-body">

                        <h3 class="card-title ">{{ Str::limit($p->title,60) }}</h3>
                        <div class="text-left">
                            <div class="badge background-color card-category"><a
                                    href="/categories/{{ $p->category->slug }}"
                                    class="text-decoration-none text-white">{{$p->category->name}}</a></div>
                        </div>
                        <p class="card-text mt-1">{!!Str::limit( $p->excerpt , 50)!!}</p>
                    </div>

                    <div class="card-footer py-3 background-color">
                        <div class="card-footer-info">
                            <span class="read-more">
                                <a class="text-white text-decoration-none read-more-1"
                                    href="/posts/{{ $p->slug }}">Lihat
                                    Selengkapnya <i class="bi bi-arrow-right ms-2"></i> </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <div class="ajax-load text-center my-5" style="display:none">
        <p><img src="{{ asset('/img/loading.gif') }}" width="40" height="40"> Sedang Memuat</p>
    </div>
</div>
<script type="text/javascript" src="/js/infiniteScroll.js"></script>
@endsection