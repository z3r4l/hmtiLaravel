@extends('frontend.layouts.main')
@section('content')
<section class="container">
    <div class="d-flex justify-content-center my-4 kegiatan">
        <img src="/img/repository.jpeg" class="img-fluid" alt="Gambar Visi Misi" width="440" height="330" class="">
    </div>
    <h3 class="text-center fw-bold text-judul"><span class="text-header d-block">KEGIATAN</span>HMTI UNIVERSITAS IBNU
        SINA
    </h3>
</section>

{{-- Start Card Kegiatan --}}


<div class="container">
    <div id="post-data" class="row d-flex justify-content-center">
        @include('frontend.partials.cardKegiatan.index')
    </div>
</div>


<div class="ajax-load text-center my-5" style="display:none">
    <p><img src="{{ asset('/img/loading.gif') }}" width="40" height="40"> Sedang Memuat</p>
</div>
{{-- End Card Kegiatan --}}

{{-- Start Pagination --}}
{{-- <div class="container d-flex justify-content-end mt-4">
    {{ $posts->links() }}
</div> --}}
{{-- End Pagination --}}

<script type="text/javascript" src="/js/infiniteScroll.js"></script>
@endsection