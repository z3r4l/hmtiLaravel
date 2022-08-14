@extends('backend.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Halaman Post</h1>
</div>
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-10">
    <div class="d-flex">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3 ms-auto"><i
                class="bi bi-plus-circle-fill me-2"></i>Create Post</a>
    </div>
    <table class="table table-bordered table-sm">
        <thead class="text-center">
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($posts as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->category->name }}</td>
                <td>
                    <a href="/dashboard/posts/{{ $row->slug }}" class="text-info ms-2 fs-4"><i
                            class="bi bi-eye-fill"></i></a>
                    <a href="/dashboard/posts/{{ $row->slug }}/edit" class="text-warning ms-2 fs-4 d-inline"><i
                            class="bi bi-pencil-square"></i></a>

                    <form action="/dashboard/posts/{{ $row->slug }}" method="post" class="d-inline">
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
@endsection