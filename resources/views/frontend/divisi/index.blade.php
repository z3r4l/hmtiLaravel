@extends('frontend.layouts.main')
@section('content')
<div class="container">
    <div class="row ">
        @foreach ($divisi as $row)
        <img src="{{ asset('storage/' . $row->image) }}" width="1280" height="400" class="img-fluid card-img-top"
            alt="...">
        <h3 class="text-uppercase about-divisi">Apa Itu Divisi {{ $row->name }} <span>
                <h1 class="d-inline text-header ">?</h1>
            </span></h3>
        <article class="divisi-content">
            <p>{!! $row->body !!}</p>
        </article>

    </div>

    <h3 class="text-center text-judul"><span class="text-header d-block text-uppercase">STRUKTUR DIVISI {{
            $row->name
            }} </span>HMTI
        UNIVERSITAS IBNU SINA
    </h3>
    @endforeach
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
</div>
@endsection