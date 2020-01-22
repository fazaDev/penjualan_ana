@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Penjualan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Penjualan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
                <div class="card-header">DATA PENJUALAN</div>
                <div class="card-body">
                    <a href="{{ url('admin/penjualan/tambah') }}" class="btn btn-primary btn-xs mb-2">Tambah</a>
                    -<form action="{{ url('admin/penjualan/laporan') }}" method="GET">
                        Tgl Mulai <input type="date" name="tgl_mulai">
                        Sampai <input type="date" name="tgl_sampai">
                        <button name="button">Laporan</button>
                    </form>
                    <table class="table table-bordered table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th width="5%">NO</th>
                                <th>PELANGGAN</th>
                                <th>TANGGAL TRANSAKSI</th>
                                <th width="10%">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penjualans as $penjualan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $penjualan->pelanggan->nama }}</td>
                                <td>{{ $penjualan->created_at }}</td>
                                <td>
                                    <a href="javascroipt:void[0]" onclick="PopupCenter('{{ url('admin/penjualan/cetak/'.$penjualan->id) }}','',600,600)" class="btn btn-info">Detail
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                <div class="pagination-wrapper">  {{ $penjualans->links() }} </div>
                </div>
            </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@push('scripts')
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script>
    function PopupCenter(pageURL, title,w,h){
      var left = (screen.width/2)-(w/2);
      var top = (screen.height/2)-(h/2);
      var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
      return targetWin;
    }
</script>
@endpush