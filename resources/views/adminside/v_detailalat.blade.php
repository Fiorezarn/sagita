<!DOCTYPE html>
<html lang="en">

@include('adminside.head')

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    @include('adminside.navbar')

    @include('adminside.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Detail Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <table class="table">
            <tr>
                <th width="100px">Nama Barang</th>
                <th width="30px">:</th>
                <th>{{ $alat->namabarang }}</th>
            </tr>
            <tr>
                <th width="100px">Deskripsi</th>
                <th width="30px">:</th>
                <th>{{ $alat->deskripsi }}</th>
            </tr>
            <tr>
                <th width="100px">Harga</th>
                <th width="30px">:</th>
                <th>{{ number_format($alat->harga, 0, ',', ',') }}</th>
            </tr>
            <tr>
                <th width="100px">Stock</th>
                <th width="30px">:</th>
                <th>{{ $alat->stock }}</th>
            </tr>
            <tr>
                <th width="100px">Kategori</th>
                <th width="30px">:</th>
                <th>{{ $alat->kategori }}</th>
            </tr>
            <tr>
                <th width="100px">Gambar</th>
                <th width="30px">:</th>
                <th><img src="{{ url('foto_produk/' . $alat->gambar) }}" width="400px"></th>
            </tr>
            <tr>
                <th><a href="/alat" class="btn btn-success btn-sm">Back</a></th>
            </tr>
        </table>


      </div><!-- /.content-header -->
    </div><!-- /.content-wrapper -->

    @include('adminside.footer')

    @include('adminside.script')
  </div><!-- /.wrapper -->
</body>

</html>
