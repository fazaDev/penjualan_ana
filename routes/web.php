<?php

Route::prefix('admin')->middleware('auth')->group( function () {
    //pelanggan   
    Route::get('pelanggan', 'PelangganController@index')->name('pelanggan.index');
    Route::get('pelanggan/tambah', 'PelangganController@tambah');
    Route::post('pelanggan/simpan', 'PelangganController@simpan');
    Route::get('pelanggan/hapus/{id}', 'PelangganController@hapus');
    Route::get('pelanggan/edit/{id}','PelangganController@edit');  
    Route::put('pelanggan/update/{id}','PelangganController@update');

    //kategori
    Route::get('kategori', 'KategoriController@index')->name('kategori.index');
    Route::get('kategori/tambah', 'KategoriController@tambah');
    Route::post('kategori/simpan', 'KategoriController@simpan');
    Route::get('kategori/hapus/{id}', 'KategoriController@hapus');
    Route::get('kategori/edit/{id}', 'KategoriController@edit');
    Route::put('kategori/update/{id}','KategoriController@update');

    //buku
    Route::get('buku', 'BukuController@index')->name('buku.index');
    Route::get('buku/tambah', 'BukuController@tambah');
    Route::post('buku/simpan', 'BukuController@simpan');
    Route::get('buku/hapus/{id}', 'BukuController@hapus');
    Route::get('buku/edit/{id}', 'BukuController@edit');
    Route::put('buku/update/{id}','BukuController@update');

    //barang
    Route::get('barang', 'BarangController@index')->name('barang.index');
    Route::get('barang/tambah', 'BarangController@tambah');
    Route::post('barang/simpan', 'BarangController@simpan');
    Route::get('barang/hapus/{id}', 'BarangController@hapus');
    Route::get('barang/edit/{id}','BarangController@edit');  
    Route::put('barang/update/{id}','BarangController@update');

    //pembelian
    Route::get('pembelian', 'PembelianController@index')->name('pembelian.index');
    Route::get('pembelian/tambah', 'PembelianController@tambah');
    Route::post('pembelian/simpan', 'PembelianController@simpan');
    Route::get('pembelian/hapus/{id}', 'PembelianController@hapus');

    //penjualan
    Route::get('penjualan','PenjualanController@index')->name('penjualan.index');
    Route::get('penjualan/tambah','PenjualanController@tambah');
    Route::post('penjualan/simpan','PenjualanController@simpan');
    Route::get('penjualan/hapusdetail/{id}','PenjualanController@hapusDetail');
    Route::get('penjualan/cetak/{id}','PenjualanController@cetak');
    Route::get('penjualan/laporan','PenjualanController@laporan');

    //penjualanDetail
    Route::get('barang/detail/{id}','BarangController@detail');

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/permisi', 'layouts.auth');
