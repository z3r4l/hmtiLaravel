@extends('frontend.layouts.main')
@section('content')
<section class="container">
    <div class="d-flex justify-content-center my-4">
        <img src="/img/illustration-pengumuman.jpeg" alt="Gambar Visi Misi" width="400" height="350" class="img-fluid">
    </div>
    <h3 class="text-center text-judul"><span class="text-header d-block">STRUKTUR</span>HMTI UNIVERSITAS
        IBNU SINA
    </h3>
    <div class="row">
        <div class="container">
            <div class="row d-flex justify-content-center">

                @foreach ($struktur as $row)
                <div class="col-md-3 col-6 mt-4 ">
                    <div class="card border-0 text-bg-dark body-struktur ">
                        <img src="{{ asset('storage/' . $row->image) }}" class="person-img" alt="...">
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
</section>
@endsection