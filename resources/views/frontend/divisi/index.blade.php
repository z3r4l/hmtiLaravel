@extends('frontend.layouts.main')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($divisi as $row)
        <img src="{{ asset('storage/' . $row->image) }}" width="1280" height="400" class="card-img-top" alt="...">
        <h2 class="my-3">{{ $title }}</h2>
        <article class="fs-5">
            <p>{!! $row->body !!}</p>
        </article>

        @endforeach
    </div>
    <h3 class="text-center fw-bold my-3"><span class="text-header d-block">STRUKTUR {{ $title }}</span>HMTIa
        UNIVERSITAS IBNU SINA
    </h3>
    <div class="row">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                @foreach ($anggota as $row)
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