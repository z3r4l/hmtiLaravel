@extends('frontend.layouts.main')
@section('content')
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4">{{ $post->title }}</h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('/') }}">Beranda</a>
        </li>
        <li class="breadcrumb-item active">{{ $post->category->name }}</li>
    </ol>

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8 border-top">

            <!-- Preview Image -->
            <img class="mt-2 rounded img-fluid" src="{{ asset('storage/'.$post->image) }}" width="750" height="400"
                alt="">

            <hr>

            <!-- Date/Time -->
            <p>Postingan Hari {{ $post->created_at->isoFormat('dddd, D MMMM Y | hh:mm:ss')}}</p>

            <hr>

            <!-- Post Content -->
            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
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
                    <iframe width="330" height="250" src="{{ $post->link }}">
                    </iframe>
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->

</div>
@endsection