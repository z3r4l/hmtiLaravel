@extends('frontend.layouts.main')
@section('content')
{{-- START HERO --}}

<div class="container">
    <div class="p-4 p-md-5 mb-4 rounded img-fluid hero">
        <div class="text-center mt-5">
            <img src="/img/logoHMTI.svg" class="ms-auto hero-logo" alt="">
        </div>
        <h1 class="mt-3 text-center text-light hero-font pb-4">HIMPUNAN MAHASISWA<br>TEKNIK
            INFORMATIKA <br>
            UNIVERSITAS IBNU SINA</h1>
    </div>
</div>
{{-- END Hero --}}

{{-- START STICKY --}}
<div class="container stick">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8 col-6 card-stick">
            <div class="row">
                <div class="col-lg card-stick-info text-center">
                    <img src="/img/icon/kegiatan-icon.svg" alt="icon">
                    <small class="d-block card-stick-text mt-2 text-muted">
                        <span class="fw-semibold text-dark">00 </span>Kegiatan Aktif
                    </small>
                </div>
                <div class="col-lg card-stick-info text-center">
                    <img src="/img/icon/anggota-icon.svg" alt="icon">
                    <small class="d-block card-stick-text mt-2 text-muted">
                        <span class="fw-semibold text-dark">{{ $jumlahAnggota }}</span> Anggota Aktif
                    </small>
                </div>
                <div class="col-lg text-center card-stick-info">
                    <img src="/img/icon/repository-icon.svg" alt="icon">
                    <small class="d-block card-stick-text-repo mt-2 text-muted">
                        <span class="fw-semibold text-dark">{{ $jumlahRepository }}</span> Repository
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- END Sticky --}}
{{-- START KEGIATAN --}}
<section class="container activity">
    <h3><span class="text-judul fw-bold">KEGIATAN KAMI</span></h3>
    <div class="row mb-3">
        <div class="col-md-4 themed-grid-col ">
            <a href="/posts/{{$posts[0]->slug }}">
                <div class="card border-0 text-bg-dark mt-3 card-beranda-big position-relative">
                    <img src="{{ asset('storage/'.$posts[0]->image) }}" class="card-img img-fluid" alt="Gambar">
                    <div class="card-img-overlay">
                        <div class="card-body card-activity">
                            <h5 class="card-title text-uppercase">{{ $posts[0]->title }}</h5>
                            <p class="card-text"><img src="/img/icon/calendar.svg" class="me-1 calendar" alt="icon">{{
                                $posts[0]->created_at->diffForHumans()}}
                            </p>
                            <small class="card-text">{{ Str::limit($posts[0]->excerpt,150)}}</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-8 themed-grid-col">
            <div class="row row-cols-2">
                @foreach ($postsLimit as $row)
                <a href="/posts/{{ $row->slug }}">
                    <div class="col mt-3">
                        <div class="card border-0 text-bg-dark card-beranda position-relative">
                            <img src="{{ asset('storage/'.$row->image) }}" class="card-img" alt="Gambar Kegiatan">
                            <div class="card-img-overlay">
                                <div class="card-body card-activitys">
                                    <h5 class="card-title text-uppercase">{{ $row->title }}</h5>
                                    <p class="card-text"><img src="/img/icon/calendar.svg" class="me-1 calendar"
                                            alt="icon">{{
                                        $row->created_at->diffForHumans()
                                        }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- END KEGIATAN --}}

{{-- START DIVISI --}}
<section class="container">
    <h3 class="text-center text-judul fw-bold"><span class="text-header d-block">DIVISI</span>HMTI UNIVERSITAS
        IBNU SINA
    </h3>
    @include('frontend.partials.cardDivisi.index')
</section>
{{-- END DIVISI --}}
{{-- START STRUKTUR ORGANISASI --}}
<section class="container struktur">
    <h3 class="text-center fw-bold text-judul"><span class="text-header d-block">STRUKTUR</span>HMTI UNIVERSITAS IBNU
        SINA
    </h3>
    <div class="row">
        <div class="container">
            <div class="row">
                @foreach ($struktur as $row)
                <div class="col-md-3 col-6 mt-4 ">
                    <div class="card border-0 text-bg-dark body-struktur ">
                        <img src="{{ asset('storage/' . $row->image) }}" class="person-img img-fluid" alt="...">
                        <div class="card-struktur">
                            <div class=" person-info background-color">
                                <h5 class="text-white text-uppercase text-center">{{ $row->name }}</h5>
                                <p class="card-text text-white text-uppercase text-center">{{ $row->jabatan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">

        <a href="/struktur" class="finbyz-button btn-form-submit fw-bold">
            LIHAT SELENGKAPNYA</a>
    </div>
</section>

{{-- END STRUKTUR ORGANISASI --}}



@endsection