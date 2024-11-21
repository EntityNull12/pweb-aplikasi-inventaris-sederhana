@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Produk</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Produk</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <a href="/products/create" class="btn btn-primary btn-sm"><i class=" fas fa-plus mr-2"></i>Tambah Barang</a>
                <a href="{{ route('products.downloadPdf') }}" class="btn btn-success btn-sm ml-2"><i class="fas fa-download mr-2"></i>Download PDF</a>
            </div>
            <div class="card-body" style="overflow-y: scroll; max-height:60vh">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Produk</th>
                            <th>Description</th>
                            <th>Kode Barang</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description ?? '-'}}</td>
                            <td>{{$product->sku}}</td>
                            <td>Rp{{$product->price}}</td>
                            <td>{{$product->stock}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="/products/edit/{{$product->id}}" class="btn btn-sm btn-warning mr-2"><i class="fas fa-edit mr-2"></i> Ubah</a>
                                    <form action="/products/{{$product->id}}" method="post">
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