@extends('frontend.layouts.main')
@section('content')
{{-- START HERO --}}
<div class="container">
    <div class="p-4 p-md-5 mb-4 rounded bg-dark" style="background: url(/img/hero-image.jpeg);">
        <div class="text-center mt-5">
            <img src="/img/hmti.jpeg" class="ms-auto" width="114" height="114" alt="">
        </div>
        <h1 class="display-3 fst-italic text-center text-light fw-bold">HIMPUNAN MAHASISWA<br>TEKNIK INFORMATIKA <br>
            UNIVERSITAS IBNU SINA BATAM</h1>
    </div>
</div>
{{-- END Hero --}}

{{-- START STICKY --}}
<div class="container stick">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10 card-stick">
            <div class="row">
                <div class="col-lg text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-card-list " viewBox="0 0 16 16">
                        <path
                            d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                        <path
                            d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                    </svg>
                    <small class="d-block ms-5 text-muted">
                        <span class="fw-bold text-dark">00 </span>Kegiatan Aktif
                    </small>
                </div>
                <div class="col-lg text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-people" viewBox="0 0 16 16">
                        <path
                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                    </svg>
                    <small class="d-block ms-5 text-muted">
                        <span class="fw-bold text-dark">00</span> Anggota Aktif
                    </small>
                </div>
                <div class="col-lg text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-archive" viewBox="0 0 16 16">
                        <path
                            d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    </svg>
                    <small class="d-block ms-5 text-muted">
                        <span class="fw-bold text-dark">{{ $jumlahRepository }}</span> Repository
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- END Sticky --}}
{{-- START KEGIATAN --}}
<div class="container mt-5">
    <h3><span class=" border-bottom border-2">KEGIATAN KAMI</span></h3>
    <div class="row mb-3">
        <div class="col-md-4 themed-grid-col ">
            <a href="/posts/{{$posts[0]->slug }}">
                <div class="card text-bg-dark mt-3 card-beranda">
                    <img src="{{ asset('storage/'.$posts[0]->image) }}" class="card-img" height="465" width="200"
                        alt="Gambar">
                    <div class="card-img-overlay card-activity">
                        <div class="card-body ">
                            <h5 class="card-title">{{ $posts[0]->title }}</h5>
                            <p class="card-text"><i class="bi bi-calendar"></i> <small>{{
                                    $posts[0]->created_at->diffForHumans()
                                    }}</small>
                            </p>
                            <p class="card-text">{{ Str::limit($posts[0]->excerpt,100)}}</p>
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
                        <div class="card text-bg-dark card-beranda">
                            <img src="{{ asset('storage/'.$row->image) }}" class="card-img" height="225" width="150"
                                alt="Gambar Kegiatan">
                            <div class="card-img-overlay activity">
                                <h5 class="card-title">{{ $row->title }}</h5>
                                <p class="card-text"><i class="bi bi-calendar"></i> <small>{{
                                        $row->created_at->diffForHumans()
                                        }}</small>
                                </p>
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
    <h3 class="text-center fw-bold mt-4"><span class="text-header d-block">STRUKTUR</span>HMTI UNIVERSITAS IBNU SINA
    </h3>
    <div class="row">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mt-4">

                <div class="col mt-4">
                    <div
                        class="shadow-lg d-flex justify-content-center align-items-center p-3 rounded-4 body-struktur flex-column">
                        <div class="person-img">
                            <img src="https://i.postimg.cc/jj555C3t/alip.jpg" width="300" height="300"
                                class="rounded-circle" alt="...">
                        </div>
                        <div class="person-name my-3">
                            <h4 class="text-dark text-uppercase fw-bold">Alif sahputra</h4>
                        </div>
                        <div class="info">
                            <h6 class="text-dark text-uppercase fw-bold">ketua hmti 2022 - 2023</h6>
                        </div>
                    </div>
                </div>


                <div class="col mt-4">
                    <div
                        class="shadow-lg d-flex justify-content-center align-items-center p-3 rounded-4 body-struktur flex-column">
                        <div class="person-img">
                            <img src="https://i.postimg.cc/Y08f1v78/panji.jpg" width="300" height="300"
                                class="rounded-circle" alt="...">
                        </div>
                        <div class="person-name my-3">
                            <h4 class="text-dark text-uppercase fw-bold">Panji Petualang</h4>
                        </div>
                        <div class="info">
                            <h6 class="text-dark text-uppercase fw-bold">ketua hmti 2023 - 2024</h6>
                        </div>
                    </div>
                </div>



                <div class="col mt-4">
                    <div
                        class="shadow-lg d-flex justify-content-center align-items-center p-3 rounded-4 body-struktur flex-column">
                        <div class="person-img">
                            <img src="https://i.postimg.cc/ZKRDwSQ0/madan.jpg" width="300" height="300"
                                class="rounded-circle" alt="...">
                        </div>
                        <div class="person-name my-3">
                            <h4 class="text-dark text-uppercase fw-bold">MAdan</h4>
                        </div>
                        <div class="info">
                            <h6 class="text-dark text-uppercase fw-bold">ketua hmti 2024 - 2025</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4">

        <a href="/struktur" class="finbyz-button btn-form-submit fw-bold">
            LIHAT SELENGKAPNYA</a>
    </div>



    {{-- END STRUKTUR ORGANISASI --}}



    @endsection