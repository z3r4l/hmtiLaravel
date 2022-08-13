@extends('frontend.layouts.main')
@section('content')
<div class="container">
    <div class="d-flex justify-content-center my-5">
        <img src="/img/repository.jpeg" alt="Gambar Visi Misi" width="440" height="330" class="">
    </div>
    <h3 class="text-center fw-bold my-4"><span class="text-header d-block">KEGIATAN</span>HMTI UNIVERSITAS IBNU SINA
    </h3>
    <div class="row">
        @include('frontend.partials.cardKegiatan.index')
    </div>
</div>
<div class="container d-flex justify-content-end">
    {{ $posts->links() }}
</div>
@endsection