@extends('frontend.layouts.main')
@section('content')
<section class="container">
    <div class="d-flex justify-content-center my-4">
        <img src="/img/repository.jpeg" class="img-fluid" alt="Gambar Visi Misi" width="440" height="330" class="">
    </div>
    <h3 class="text-center fw-bold text-judul"><span class="text-header d-block">KEGIATAN</span>HMTI UNIVERSITAS IBNU
        SINA
    </h3>
</section>

{{-- Start Card Kegiatan --}}
@include('frontend.partials.cardKegiatan.index')
{{-- End Card Kegiatan --}}

{{-- Start Pagination --}}
<div class="container d-flex justify-content-end mt-4">
    {{ $posts->links() }}
</div>
{{-- End Pagination --}}
@endsection