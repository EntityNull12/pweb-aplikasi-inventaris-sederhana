@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Kategori</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Kategori</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <a href="/categories/create" class="btn btn-primary btn-sm"><i class=" fas fa-plus mr-2"></i>Tambah Kategori</a>
            </div>
            <div class="card-body" style="overflow-y: scroll;max-height:60vh">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Slug</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug ?? '-'}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="/categories/edit/{{$category->id}}" class="btn btn-sm btn-warning mr-2"><i class="fas fa-edit mr-2"></i>Ubah</a>
                                    <form action="/categories/{{$category->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="mr-2 fas fa-trash"></i>Hapus</button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection