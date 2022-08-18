@extends('frontend.layouts.main')
@section('content')
<div class="container">
    <div class="d-flex justify-content-center my-4">
        <img src="/img/illustration-pengumuman.jpeg" alt="Gambar Visi Misi" width="400" height="350" class="img-fluid">
    </div>
    <h3 class="text-center fw-bold my-4"><span class="text-header d-block">STRUKTUR</span>HMTI UNIVERSITAS IBNU SINA
    </h3>
    <div class="row">
        <div class="container">
            <div class="row d-flex justify-content-center">

                @foreach ($struktur as $row)
                <div class="col-md-3 col-6 mt-4">
                    <div class=" d-flex justify-content-center align-items-center rounded-4 body-struktur flex-column">
                        <div class="person-img">
                            <img src="{{ asset('storage/' . $row->image) }}" width="200" height="200"
                                class="rounded-circle " alt="...">
                        </div>
                        <div class="person-name my-3">
                            <h5 class="text-dark text-uppercase fw-bold text-center">{{ $row->name }}</h5>
                        </div>
                        <div class="info">
                            <h6 class="text-dark text-uppercase fw-normal text-center">{{ $row->jabatan }}</h6>
                        </div>
                    </div>
                </div>
                @endforeach





            </div>
        </div>
    </div>
</div>
@endsection