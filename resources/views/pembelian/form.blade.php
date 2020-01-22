@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pembelian</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pembelian</li>
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
                <div class="card-header">Pembelian</div>
                <div class="card-body">
                    {{ Form::model($obj, array('action' => $action, 'files' => true, 'method' => $method)) }}
                        <div class="form-group">
                            {{ Form::label('barang_id', 'Barang') }}
                            
                            {!! Form::select('barang_id', \App\Barang::pluck('nama','id'), null, ['class'=>'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('barang_id') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('nama_pemasok', 'Pemasok') }}
                            {{ Form::text('nama_pemasok',null,array('class'=>'form-control','placeholder' => '','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('nama_pemasok') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('jumlah', 'Jumlah') }}
                            {{ Form::number('jumlah',null,array('class'=>'form-control','placeholder' => '')) }}
                            <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('harga', 'Harga') }}
                            {{ Form::number('harga',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('harga') }}</span>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ $btn_submit }}</button>
                    {!! Form::close() !!}
                </div>
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