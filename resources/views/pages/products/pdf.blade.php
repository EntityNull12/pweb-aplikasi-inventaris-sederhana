<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Inventaris Sederhana</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('templates/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('templates/dist/css/adminlte.min.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        /* Basic styling for table */
        body { font-family: Arial, sans-serif; }
        .table { width: 100%; border-collapse: collapse; }
        .table th, .table td { padding: 8px; border: 1px solid #dee2e6; }
        .table th { background-color: #f2f2f2; text-align: left; }
        .text-center { text-align: center; }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">


        <!-- Content Wrapper. Contains page content -->
        <div class="">
            <!-- Content Header (Page header) -->
            <h2 class="text-center">Inventaris Barang</h2>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body" style="overflow-y: scroll;">
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
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /.content -->


        </div>
        <!-- /.content-wrapper -->


    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('templates/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('templates/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('templates/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="{{asset('templates/dist/js/demo.js')}}"></script> -->
</body>

</html>