@extends('frontend.layouts.main')
@section('content')
<div class="container">
    <div class="d-flex justify-content-center my-4">
        <img src="/img/illustration-pengumuman.jpeg" alt="Gambar Visi Misi" width="400" height="350" class="">
    </div>
    <h3 class="text-center fw-bold my-4"><span class="text-header d-block">STRUKTUR</span>HMTI UNIVERSITAS IBNU SINA
    </h3>
    <div class="row">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                @foreach ($struktur as $row)
                <div class="col mt-4">
                    <div
                        class=" d-flex justify-content-center align-items-center p-3 rounded-4 body-struktur flex-column">
                        <div class="person-img">
                            <img src="{{ asset('storage/' . $row->image) }}" width="300" height="300"
                                class="rounded-circle" alt="...">
                        </div>
                        <div class="person-name my-3">
                            <h4 class="text-dark text-uppercase fw-bold">{{ $row->name }}</h4>
                        </div>
                        <div class="info">
                            <h6 class="text-dark text-uppercase fw-bold">{{ $row->jabatan }}</h6>
                        </div>
                    </div>
                </div>
                @endforeach





            </div>
        </div>
    </div>
</div>
@endsection