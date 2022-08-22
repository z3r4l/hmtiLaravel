@extends('frontend.layouts.main')
@section('content')
{{-- START ABOUT IMAGE --}}
<section class="container">
    <h3 class="text-center text-judul"><span class="text-header d-block">TENTANG HMTI</span> UNIVERSITAS IBNU SINA
    </h3>
    <div class="row">
        <div class="col-8 ">
            <img src="/img/tentang1.jpeg" class="img-fluid card-img rounded mt-1" height="610" width="200" alt="...">
        </div>
        <div class="col-4">
            <img src="/img/tentang2.jpeg" class="img-fluid card-img rounded mt-2" height="300" width="300" alt="...">
            <img src="/img/tentang3.jpeg" class="img-fluid card-img rounded mt-2" height="300" width="300" alt="...">
        </div>
    </div>
</section>
{{-- END ABOUT IMAGE --}}

{{-- START STORY HMTI IBNUSINA --}}
<section class="container">
    <div class="row">
        <h3 class="text-center text-judul"><span class="text-header d-block">SEJARAH HMTI</span> UNIVERSITAS
            IBNU
            SINA
        </h3>
        <div class="col sejarah-hmti" style="text-align: justify">Dengan Rahmat Allah Yang Maha Esa, Universitas
            Ibnu
            Sina telah
            berhasil mempertahankan eksistensinya sebagai salah kampus yang bergerak dalam bidang pendidikan, maka
            sudah
            sepantasnya bagi seluruh civitas akademika Universitas Ibnu Sina mendukung dan menjaga brand image
            kampus
            demi terciptanya masyarakat yang cerdas, adil dan sejahtera. Mahasiswa sebagai generasi muda yang
            terdidik
            dan energik yang terstruktur dalam Himpunan Mahasiswa Teknik Informatika (HMTI) memiliki kewajiban dan
            berperan aktif dalam mewujudkan cita-cita kampus secara ideal, dengan menjalin tali persaudaraan yang
            erat
            dalam masyarakat kampus Universitas Ibnu Sina.
        </div>
        <div class="col sejarah-hmti" style="text-align: justify">Dengan keinginan untuk berkembang dibentuklah
            suatu himpunan
            mahasiswa yang mengakomodir cita, karsa, dan karya segenap mahasiswa Teknik Informatika Universitas Ibnu
            Sina yang memiliki minat dan kepedulian terhadap pengkajian dan penerapan sistem dan teknologi
            informatika.
            HMTI Universitas Ibnu Sina sebagai wadah dari mahasiswa teknik informatika yang sadar akan hak dan
            kewajibannya sebagai unit kegiatan kampus berusaha memberikan dharma bhaktinya untuk mewujudkan
            nilai-nilai
            kebenaran demi terwujudnya mahasiswa program studi teknik informatika yang cerdas, adil dan berjiwa
            pemimpin.</div>
    </div>
</section>
{{-- END STORY HMTI IBNUSINA --}}

{{-- Start VISI MISI --}}
<section class="container">
    <h3 class="text-center text-judul"><span class="text-header d-block">VISI DAN MISI</span>HMTI
        UNIVERSITAS
        IBNU
        SINA
    </h3>
    {{-- Start Include Card VisiMisi --}}
    @include('frontend.partials.cardVisiMisi.index')
    {{-- End Include Card VisiMisi --}}

</section>
{{-- END VISI MISI --}}

{{-- START DIVISI --}}
<section class="container">
    <h3 class="text-center text-judul fw-bold"><span class="text-header d-block">DIVISI</span>HMTI UNIVERSITAS
        IBNU SINA
    </h3>

    {{-- Start Includ Card Divisi --}}
    @include('frontend.partials.cardDivisi.index')
    {{-- End Includ Card Divisi --}}

</section>
{{-- END DIVISI --}}
@endsection