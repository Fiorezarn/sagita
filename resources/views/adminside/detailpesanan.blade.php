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
                <th width="100px">Id Pesanan</th>
                <th width="30px">:</th>
                <th>{{ $order->id }}</th>
            </tr>
            <tr>
                <th width="100px">Nama Penerima</th>
                <th width="30px">:</th>
                <th>{{ $order->nama_user  }}</th>
            </tr>
            <tr>
                <th width="100px">No Hp</th>
                <th width="30px">:</th>
                <th>{{ $order->nohp }}</th>
            </tr>
            <tr>
                <th width="100px">Nama Barang</th>
                <th width="30px">:</th>
                <th>{{ $order->nama_barang }}</th>
            </tr>
            <tr>
                <th width="100px">Total Item</th>
                <th width="30px">:</th>
                <th>{{ $order->totalitem }}</th>
            </tr>
            <tr>
                <th width="100px">Total Harga</th>
                <th width="30px">:</th>
                <th>{{ number_format($order->totalharga, 0, ',', ',') }}</th>
            </tr>
            <tr>
                <th width="100px">Nama Rekening</th>
                <th width="30px">:</th>
                <th>{{ $order->nama_rekening }}</th>
            </tr>
            <tr>
                <th width="100px">Alamat</th>
                <th width="30px">:</th>
                <th>{{ $order->alamat }}</th>
            </tr>
            <tr>
                <th width="100px">Gambar</th>
                <th width="30px">:</th>
                <th><img src="{{ url('buktipembayaran/' . $order->buktipembayaran) }}" width="400px"></th>
            </tr>
            <tr>
                <th width="100px">Status</th>
                <th width="30px">:</th>
                <th>{{ $order->status_pembayaran }}</th>
            </tr>
            <tr>
                <th><a href="/pesanan" class="btn btn-success btn-sm">Back</a></th>
            </tr>
        </table>


      </div><!-- /.content-header -->
    </div><!-- /.content-wrapper -->

    @include('adminside.footer')

    @include('adminside.script')
  </div><!-- /.wrapper -->
</body>

</html>
