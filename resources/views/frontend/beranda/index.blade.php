@extends('frontend.layouts.main')
@section('content')
{{-- START HERO --}}
<div class="container">
    <div class="p-4 p-md-5 mb-4 rounded img-fluid hero">
        <div class="text-center mt-5">
            <img src="/img/hmti.jpeg" class="ms-auto" width="114" height="114" alt="">
        </div>
        <h1 class="mt-3 text-center text-light hero-font fw-bold pb-4">HIMPUNAN MAHASISWA<br>TEKNIK
            INFORMATIKA <br>
            UNIVERSITAS IBNU SINA BATAM</h1>
    </div>
</div>
{{-- END Hero --}}

{{-- START STICKY --}}
<div class="container stick">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10 col-6 card-stick">
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
                    <small class="d-block card-stick-text me-5 mt-2 text-muted">
                        <span class="fw-semibold text-dark">{{ $jumlahRepository }}</span> Repository
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- END Sticky --}}
{{-- START KEGIATAN --}}
<div class="container activity">
    <h3><span class=" border-bottom mt-5 border-2 fw-bold">KEGIATAN KAMI</span></h3>
    <div class="row mb-3">
        <div class="col-md-4 themed-grid-col ">
            <a href="/posts/{{$posts[0]->slug }}">
                <div class="card border-0 text-bg-dark mt-3 card-beranda">
                    <img src="{{ asset('storage/'.$posts[0]->image) }}" class="card-img" height="465" alt="Gambar">
                    <div class="card-img-overlay ">
                        <div class="card-body card-activity">
                            <h5 class="card-title text-uppercase">{{ $posts[0]->title }}</h5>
                            <p class="card-text"><i class="bi bi-calendar"></i> <small>{{
                                    $posts[0]->created_at->diffForHumans()
                                    }}</small>
                            </p>
                            <small class="card-text">{{ Str::limit($posts[0]->excerpt,180)}}</small>
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
                        <div class="card border-0 text-bg-dark card-beranda">
                            <img src="{{ asset('storage/'.$row->image) }}" class="card-img" height="225" width="150"
                                alt="Gambar Kegiatan">
                            <div class="card-img-overlay card-activitys">
                                <div class="card-body ">
                                    <h5 class="card-title text-uppercase">{{ $row->title }}</h5>
                                    <p class="card-text"><i class="bi bi-calendar"></i> <small>{{
                                            $row->created_at->diffForHumans()
                                            }}</small>
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
</div>

{{-- END KEGIATAN --}}

{{-- START DIVISI --}}
@include('frontend.partials.cardDivisi.index')
{{-- END DIVISI --}}
{{-- START STRUKTUR ORGANISASI --}}

<div class="container">
    <h3 class="text-center fw-bold pt-5 mt-5"><span class="text-header d-block">STRUKTUR</span>HMTI UNIVERSITAS IBNU
        SINA
    </h3>
    <div class="row">
        <div class="container">
            <div class="row">
                @foreach ($struktur as $row)
                <div class="col-md-3 col-6 mt-4">
                    <div
                        class="shadow-lg d-flex justify-content-center align-items-center p-3 rounded-4 body-struktur flex-column">
                        <div class="person-img">
                            <img src="{{ asset('storage/' . $row->image) }}" width="200" height="200"
                                class="rounded-circle" alt="...">
                        </div>
                        <div class="person-name my-3">
                            <h5 class="text-dark text-uppercase text-center fw-bold">{{ $row->name }}</h5>
                        </div>
                        <div class="info">
                            <h6 class="text-dark text-uppercase text-center fw-normal">{{ $row->jabatan }}</h6>
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



    {{-- END STRUKTUR ORGANISASI --}}



    @endsection