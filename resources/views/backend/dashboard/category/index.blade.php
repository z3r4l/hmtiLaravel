@extends('backend.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Halaman Info Category</h1>
</div>
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="card">
    <div class="card-body">
        <div class="table-responsive col-lg-12">
            <div class="d-flex">
                <a href="/dashboard/category/create" class="btn btn-success mb-3 rounded-5">
                    <i class="bi bi-plus-circle-fill me-1"></i>Tambah Category Baru</a>
            </div>
            <table class="table table-bordered table-sm">
                <thead class="text-center">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama category</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($category as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->slug }}</td>
                        <td>
                            <a href="/dashboard/category/{{ $row->slug }}/edit" class="text-warning ms-2 fs-4 d-inline">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <form action="/dashboard/category/{{ $row->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="text-danger bg-body ms-2 fs-4 border-0"
                                    onclick="return confirm('are you sure you want to delete')"><i
                                        class="bi bi-x-circle-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection