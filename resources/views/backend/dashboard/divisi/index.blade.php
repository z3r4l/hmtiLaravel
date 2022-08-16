@extends('backend.layouts.main')
@section('content')
<div
    class="col-lg-10 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Halaman Divisi</h1>
</div>
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-10">
    <table class="table table-bordered table-sm">
        <thead class="text-center">
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Divisi</th>
                <th scope="col">Definisi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($divisies as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->name }}</td>
                <td>{!! $row->body !!}</td>
                <td>
                    <a href="/dashboard/divisi/{{ $row->slug }}" class="text-info ms-2 fs-4 "><i
                            class="bi bi-eye-fill"></i></a>
                    <a href="/dashboard/divisi/{{ $row->slug }}/edit" class="text-warning ms-2 fs-4 d-inline"><i
                            class="bi bi-pencil-square"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection