@extends('frontend.layouts.main')
@section('content')
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h2 class="mt-4 text-uppercase col-lg-10 post-title">{{ $post->title }}</h2>

    <ol class="breadcrumb category-post">
        <li class="breadcrumb-item">
            <a href="{{ url('/') }}">Beranda</a>
        </li>
        <li class="breadcrumb-item active">{{ $post->category->name }}</li>
    </ol>

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8 post">
            <hr>

            <!-- Date/Time -->
            <p class="date-post">Postingan Hari {{ $post->created_at->isoFormat('dddd, D MMMM Y | hh:mm:ss')}}</p>

            <hr>

            <!-- Preview Image -->
            <img class="mt-2 rounded img-fluid" src="{{ asset('storage/'.$post->image) }}" alt="">



            <!-- Post Content -->
            <article class="my-3">
                <p class="content-post">{!! $post->body !!}</p>
            </article>
            <hr>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">



            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header text-center background-color text-light">Kategori Kegiatan</h5>
                <div class="card-body">
                    <div class="row">
                        @foreach ($category as $row)
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li class="mt-2">
                                    <a class="text-decoration-none text-header" href="/categories/{{ $row->slug }}">{{
                                        $row->name }}</a>
                                </li>
                            </ul>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header background-color text-light text-center">Video Dokumentasi</h5>
                <div class="card-body">
                    <iframe width="330" height="250"
                        src="https://www.youtube.com/embed/{{ $post->link }}?autoplay=1&mute=1">
                    </iframe>
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->

</div>
@endsection