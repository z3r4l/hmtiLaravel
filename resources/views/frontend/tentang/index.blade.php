@extends('frontend.layouts.main')
@section('content')
{{-- START ABOUT IMAGE --}}
<div class="container mt-5">
    <h3 class="text-center fw-bold mt-4"><span class="text-header d-block">TENTANG HMTI</span> UNIVERSITAS IBNU SINA
    </h3>
    <div class="row mb-3">
        <div class="col-md-6 themed-grid-col ">
            <img src="https://source.unsplash.com/500x400" class="card-img rounded" height="610" width="200" alt="...">
        </div>
        <div class="col-md-6 themed-grid-col">
            <div class="row row-cols-2">
                <img src="https://source.unsplash.com/500x400" class="card-img rounded" height="300" width="300"
                    alt="...">
                <img src="https://source.unsplash.com/500x400" class="card-img rounded mt-2" height="300" width="300"
                    alt="...">

            </div>
        </div>

    </div>
</div>
{{-- END ABOUT IMAGE --}}

{{-- START STORY HMTI IBNUSINA --}}
<div class="container">
    <div class="row">
        <h3 class="text-center fw-bold my-5"><span class="text-header d-block">SEJARAH HMTI</span> UNIVERSITAS IBNU SINA
        </h3>
        <div class="col" style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi qui,
            quam laboriosam suscipit
            aperiam excepturi sed aspernatur non voluptate eligendi debitis voluptatum deleniti minus hic facere ab
            autem laborum accusamus minima dolores nostrum, vel molestias fugiat officiis! Eos magni vitae molestias
            fugiat nisi hic optio! Incidunt adipisci, quo a officia eligendi ipsa, laborum sed omnis, dolore cumque vel
            accusantium illo delectus architecto. Vitae ea praesentium ullam nulla itaque nihil ducimus consequuntur,
            laboriosam aspernatur similique neque ipsum dolores eum obcaecati reprehenderit deleniti quibusdam
            distinctio nobis voluptates natus. Eum, qui quas, quaerat recusandae totam itaque commodi maiores inventore
            a tempore deleniti autem distinctio necessitatibus corporis quam ab eius veniam molestias iure! Maxime
            debitis vero assumenda. Sed distinctio quos temporibus at libero quod officia facere optio asperiores enim!
            Possimus
        </div>
        <div class="col" style="text-align: justify">facilis pariatur? Hic atque quisquam omnis, officia consectetur
            molestias provident error
            libero quidem possimus repudiandae quibusdam, aliquam cumque nulla inventore nisi voluptas corporis
            assumenda ad quo cum neque dolores minus saepe! Minus neque pariatur autem ad temporibus repellat quaerat id
            reprehenderit? Perspiciatis doloremque cumque est eum magni omnis in voluptatum! Exercitationem perferendis,
            a ipsam distinctio cupiditate laboriosam laborum reiciendis quibusdam harum doloribus repudiandae asperiores
            natus obcaecati minima magnam nulla sequi temporibus architecto rerum fugit labore. Fugit fuga ipsum
            exercitationem repellendus unde ea, aliquid illum porro praesentium reprehenderit nulla soluta eaque libero,
            ab consequuntur aut! Aliquam ipsa recusandae maxime, vel harum reiciendis dolor praesentium nemo, quod
            voluptates quibusdam distinctio eum ut cum nihil nisi impedit itaque? Ipsum quam deserunt fugit.</div>
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