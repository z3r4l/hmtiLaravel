@extends('backend.layouts.main')
@section('content')
<div class="container mt-5">
    <div class="row">

        <a href="/dashboard/divisi" class="btn btn-success"><i class="bi bi-arrow-left"></i> Kembali</a>
        <a href="/dashboard/divisi/{{ $divisies->slug }}/edit" class="btn btn-warning text-white"><i
                class="bi bi-pencil-square"></i> Edit</a>
        <img src="{{ asset('storage/' . $divisies->image) }}" width="1280" height="400" class="card-img-top mt-2"
            alt="...">
        <article>
            <p>{!! $divisies->body !!}</p>
        </article>

    </div>
    <h3 class="text-center fw-bold my-3"><span class="text-header d-block">STRUKTUR {{ $divisies->name }} </span>HMTI
        UNIVERSITAS IBNU SINA
    </h3>
    <div class="row">
        <div class="container">
            <div class="">
                <a href="/dashboard/strukturs/create" class="btn btn-primary mb-3"><i
                        class="bi bi-plus-circle-fill me-2"></i>Tambah Anggota</a>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                @foreach ($struktur as $row)
                <div class="col mt-4">
                    <div
                        class=" d-flex justify-content-center align-items-center p-3 rounded-4 body-struktur flex-column">
                        <div class="person-img">
                            <img src="{{ asset('storage/'.$row->image) }}" width="300" height="300"
                                class="rounded-circle" alt="...">
                        </div>
                        <div class="person-name my-3">
                            <h4 class="text-dark text-uppercase fw-bold">{{ $row->name }}</h4>
                        </div>
                        <div class="info">
                            <h6 class="text-dark text-uppercase fw-bold">{{ $row->jabatan }}</h6>
                        </div>
                        <div>
                            <a href="/dashboard/strukturs/{{ $row->slug }}/edit" class="btn btn-warning text-white"><i
                                    class="bi bi-pencil-square"></i>
                                Edit</a>
                            <form action="/dashboard/strukturs/{{ $row->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger"
                                    onclick="return confirm('are you sure you want to delete')"><i
                                        class="bi bi-x-circle-fill"></i>Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach






            </div>
        </div>
    </div>
</div>
@endsection