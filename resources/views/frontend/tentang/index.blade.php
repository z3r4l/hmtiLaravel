@extends('frontend.layouts.main')
@section('content')
{{-- START ABOUT IMAGE --}}
<div class="container mt-5" id="tentang">
    <h3 class="text-center fw-bold mt-4"><span class="text-header d-block">TENTANG HMTI</span> UNIVERSITAS IBNU SINA
    </h3>
    <div class="row mb-3">
        <div class="col-md-6 themed-grid-col ">
            <img src="/img/tentang1.jpeg" class="img-fluid card-img rounded mt-2" height="610" width="200" alt="...">
            <img src="/img/tentang4.jpeg" class="img-fluid card-img rounded mt-2" height="300" width="300" alt="...">
        </div>
        <div class="col-md-6 themed-grid-col">
            <div class="row row-cols-2">
                <img src="/img/tentang2.jpeg" class="img-fluid card-img rounded mt-2" height="300" width="300"
                    alt="...">
                <img src="/img/tentang3.jpeg" class="img-fluid card-img rounded mt-2" height="300" width="300"
                    alt="...">


            </div>
        </div>

    </div>
</div>
{{-- END ABOUT IMAGE --}}

{{-- START STORY HMTI IBNUSINA --}}
<div class="container">
    <div class="row">
        <h3 class="text-center fw-bold pt-4 mt-5"><span class="text-header d-block">SEJARAH HMTI</span> UNIVERSITAS IBNU
            SINA
        </h3>
        <div class="col" style="text-align: justify">Dengan Rahmat Allah Yang Maha Esa, Universitas Ibnu Sina telah
            berhasil mempertahankan eksistensinya sebagai salah kampus yang bergerak dalam bidang pendidikan, maka sudah
            sepantasnya bagi seluruh civitas akademika Universitas Ibnu Sina mendukung dan menjaga brand image kampus
            demi terciptanya masyarakat yang cerdas, adil dan sejahtera. Mahasiswa sebagai generasi muda yang terdidik
            dan energik yang terstruktur dalam Himpunan Mahasiswa Teknik Informatika (HMTI) memiliki kewajiban dan
            berperan aktif dalam mewujudkan cita-cita kampus secara ideal, dengan menjalin tali persaudaraan yang erat
            dalam masyarakat kampus Universitas Ibnu Sina.
        </div>
        <div class="col" style="text-align: justify">Dengan keinginan untuk berkembang dibentuklah suatu himpunan
            mahasiswa yang mengakomodir cita, karsa, dan karya segenap mahasiswa Teknik Informatika Universitas Ibnu
            Sina yang memiliki minat dan kepedulian terhadap pengkajian dan penerapan sistem dan teknologi informatika.
            HMTI Universitas Ibnu Sina sebagai wadah dari mahasiswa teknik informatika yang sadar akan hak dan
            kewajibannya sebagai unit kegiatan kampus berusaha memberikan dharma bhaktinya untuk mewujudkan nilai-nilai
            kebenaran demi terwujudnya mahasiswa program studi teknik informatika yang cerdas, adil dan berjiwa
            pemimpin.</div>
    </div>
</div>
{{-- END STORY HMTI IBNUSINA --}}

{{-- Start VISI MISI --}}
@include('frontend.partials.cardVisiMisi.index')
{{-- END VISI MISI --}}

{{-- START DIVISI --}}
@include('frontend.partials.cardDivisi.index')
{{-- END DIVISI --}}
@endsection