<!DOCTYPE html>
<html lang="en">

@include('adminside.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('AdminLTE/dist') }}//img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div> --}}

        @include('adminside.navbar')

        @include('adminside.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Edit Barang</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <form action="/makanan/update/{{ $makanan->id }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Id</label>
                                        <input name="id" class="form-control" value="{{ $makanan->id }}"
                                            readonly>
                                        <div class="text-danger">
                                            @error('id')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nama Barang</label>
                                        <input name="namabarang" class="form-control"
                                            value="{{ $makanan->namabarang }}">
                                        <div class="text-danger">
                                            @error('namabarang')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input name="harga" class="form-control" value="{{ $makanan->harga }}">
                                        <div class="text-danger">
                                            @error('harga')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Stock</label>
                                        <input name="stock" class="form-control" value="{{ $makanan->stock }}">
                                        <div class="text-danger">
                                            @error('stock')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="">Kategori</label>
                                        <input name="kategori" class="form-control" value="{{ $makanan->kategori }}">
                                        <div class="text-danger">
                                            @error('kategori')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <input name="deskripsi" class="form-control" value="{{ $makanan->deskripsi }}">
                                        <div class="text-danger">
                                            @error('deskripsi')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm 12">
                                        <div class="col-sm-4">
                                            <img src="{{ url('foto_produk/' . $makanan->gambar) }}" width="150px">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Gambar</label>
                                        <input type="file" name="gambar" class="form-control">
                                        <div class="text-danger">
                                            @error('gambar')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <a href="/makanan" class="btn btn-danger btn-sm">Close</a>
                                        <button class="btn btn-primary btn-sm">Save</button>
                                    </div>
                                    <!-- form-group -->
                                </div>
                                <!-- col-sm-6 -->
                            </div>
                            <!-- row -->
                        </div>
                        <!-- content -->

                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
        @include('adminside.footer')


    @include('adminside.script')
</body>

</html>
