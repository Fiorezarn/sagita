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
              <h1 class="m-0">Daftar Alat</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <P>Jumlah Data : {{$totalalat}}</P>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <a href="/alat/add" class="btn btn-primary btn-sm">Add Barang</a>
        <br><br>

        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-check"></i>Success</h5>
          {{ session('pesan') }}
        </div>
        @endif
        <table class="table table-bordered">
          <thead>
            <tr>
              <td>No</td>
              <td>Nama Barang</td>
              <td>Deskripsi</td>
              <td>Harga</td>
              <td>Stock</td>
              <td>Kategori</td>
              <td>Gambar</td>
              <td>Action</td>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            @foreach ($alat as $item)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $item->namabarang }}</td>
              <td>{{ $item->deskripsi }}</td>
              <td>{{ $item->harga }}</td>
              <td>{{ $item->stock }}</td>
              <td>{{ $item->kategori }}</td>
              <td><img src="{{ url('foto_produk/' . $item->gambar) }}" width="100px"></td>
              <td>
                <a href="/alat/detail/{{ $item->id }}" class="btn btn-sm btn-success">Detail</a>
                <a href="/alat/edit/{{ $item->id }}" class="btn btn-sm btn-warning">Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $item->id}}">
                  Delete
                </button>
              </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="delete{{ $item->id }}">
              <div class="modal-dialog">
                <div class="modal-content bg-danger">
                  <div class="modal-header">
                    <h4 class="modal-title">{{ $item->namabarang }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Apakah Anda Ingin Menghapus Data?</p>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
                    <a href="/budaya/delete/{{ $item->id }}" class="btn btn-outline-light">Iya</a>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            @endforeach
          </tbody>

        </table>
      </div><!-- /.content-header -->
    </div><!-- /.content-wrapper -->

    @include('adminside.footer')

    @include('adminside.script')
  </div><!-- /.wrapper -->
</body>

</html>
