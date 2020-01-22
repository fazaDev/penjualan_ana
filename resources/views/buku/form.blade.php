@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Buku</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Buku</li>
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
                <div class="card-header">TAMBAH BUKU</div>
                <div class="card-body">
                    {{ Form::model($obj, array('action' => $action, 'files' => true, 'method' => $method)) }}
                        <div class="form-group">
                            {{ Form::label('judul', 'NAMA BUKU') }}
                            {{ Form::text('judul',null,array('class'=>'form-control','placeholder' => 'Nama Buku','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('judul') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('tahun_terbit', 'TAHUN TERBIT') }}
                            {{ Form::text('tahun_terbit',null,array('class'=>'form-control','placeholder' => 'Tahun Terbit','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('tahun_terbit') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('pengarang', 'PENGARANG') }}
                            {{ Form::text('pengarang',null,array('class'=>'form-control','placeholder' => 'Pengarang','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('pengarang') }}</span>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ $btn_submit }}</button>
                    {!! Form::close() !!}
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
<script>
  $(function () {
    $("#example1").DataTable();
    $('#tablePelanggan').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endpush