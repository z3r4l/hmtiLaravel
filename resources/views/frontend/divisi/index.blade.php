@extends('frontend.layouts.main')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($divisi as $row)
        <img src="{{ asset('storage/' . $row->image) }}" width="1280" height="400" class="img-fluid card-img-top"
            alt="...">
        <h2 class="my-3"></h2>
        <article class="fs-5">
            <p class="text-capitalize">{!! $row->body !!}</p>
        </article>

    </div>

    <h3 class="text-center fw-bold my-3"><span class="text-header d-block text-uppercase">STRUKTUR DIVISI {{ $row->name
            }} </span>HMTI
        UNIVERSITAS IBNU SINA
    </h3>
    @endforeach
    <div class="row">
        <div class="container">
            <div class="row d-flex justify-content-center">
                @foreach ($struktur as $row)
                <div class="col-md-3 col-6 mt-4">
                    <div
                        class=" d-flex justify-content-center align-items-center p-3 rounded-4 body-struktur flex-column">
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
</div>
@endsection