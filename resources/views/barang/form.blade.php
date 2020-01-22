@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Barang</li>
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
                <div class="card-header">TAMBAH BARANG</div>
                <div class="card-body">
                    {{ Form::model($obj, array('action' => $action, 'files' => true, 'method' => $method)) }}
 
                        <div class="form-group">
                            {{ Form::label('nama', 'Nama Barang') }}
                            {{ Form::text('nama',null,array('class'=>'form-control','placeholder' => 'Nama Barang','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('Kategori', 'KATEGORI') }}
                            <br>
                            {{ Form::radio('kategori', 'ATK', true)}} ATK (Alat Tulis Kantor)
                            {{ Form::radio('kategori', 'Makanan/Minuman', false)}} Makanan/Minuman
 
                            <span class="text-danger">{{ $errors->first('kategori') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('satuan', 'Satuan') }}
                            {{ Form::select('satuan', array('Pcs' => 'Pcs',
                                                            'Lusin' => 'Lusin',
                                                            'Rim' => 'Rim',
                                                            'Dus' => 'Dus',
                                                            'Lainnya' => 'Lainnya'), 'Psc',array('class'=>'form-control')) }}
 
                            <span class="text-danger">{{ $errors->first('satuan') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('harga_jual', 'Harga Jual') }}
                            {{ Form::number('harga_jual',null,array('class'=>'form-control','placeholder' => 'Harga Jual')) }}
                            <span class="text-danger">{{ $errors->first('harga_jual') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('stok', 'Stok') }}
                            {{ Form::number('stok',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('stok') }}</span>
                        </div>
                         <div class="form-group">
                          {{ Form::label('gambar', 'Gambar') }}
                          {!! Form::file('gambar', ['class' => 'form-control']) !!}
                          <span class="text-danger">{{ $errors->first('gambar') }}</span>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ $btn_submit }}</button>
                    {!! Form::close() !!}
                </div>
            </div><!-- /.card -->
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