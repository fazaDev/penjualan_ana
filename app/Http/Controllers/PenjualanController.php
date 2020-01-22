<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        if (!empty($keyword)) {
            $data['penjualans'] = \App\Penjualan::whereHas('pelanggan', function ($query) use ($request) {
                $query->where('nama', 'like', "%{$request->search}%");
            })->paginate(1);
        } else {
            $data['penjualans'] = \App\Penjualan::latest()->paginate(10);
        }
            return view('penjualan.index',$data);
    }

    public function tambah(Request $request)
    {
        $id = $request->id;
            $data['penjualan']  = new \App\Penjualan();
            $data['judul']      = "Tambah Transaksi Pembelian";
            $data['action']     = 'PenjualanController@simpan';
        if(empty($id)){
            //jika id kosong, maka tampilkan semua data pelanggan
            $data['pelanggans'] = \App\Pelanggan::pluck('nama','id');
        }else{
            //jika id tidak kosong, berarti proses input detail penjualan
            $data['id']         = $id;
            $penjualan          = \App\Penjualan::findOrFail($id);
            //mengambil data pelanggan yang ingin membeli lebih dari satu barang
            $pelanggan_id       = $penjualan->pelanggan_id;
            $data['penjualan']  = $penjualan;
            $data['pelanggans'] = \App\Pelanggan::where('id','=',$pelanggan_id)->pluck('nama','id');
        }
        $data['barangs']    = \App\Barang::pluck('nama','id');
            $data['btn_submit'] = 'SIMPAN';
            $data['method']     = "POST";
            return view('penjualan.form',$data);
        }

    public function simpan(Request $request)
    {
        $validasi = $this->validate($request,[
                'barang_id'     => 'required',
                'pelanggan_id'  => 'required',
                'harga'         => 'required|integer',
                'jumlah'        => 'required|integer',
        ]);
        $penjualan_id = $request->penjualan_id;
        if(empty($penjualan_id)){
            //jika penjualan_id kosong, berarti input penjualan baru
            $penjualan = new \App\Penjualan();
            $penjualan->pelanggan_id = $request->pelanggan_id;
            $penjualan->keterangan   = 'Lunas';
            $penjualan->save();
            $penjualan_id = $penjualan->id;
        }
        //cek stok
        $barang       = \App\Barang::findOrFail($request->barang_id);
        $update_stok  = $barang->stok-$request->jumlah;
        if($update_stok < 0)
        {
            return redirect('admin/penjualan/tambah?id='.$penjualan_id)->with('pesan','stok tidak cukup');
        }
        //simpan detail penjualan
        $penjualan_detail = new \App\PenjualanDetail();
        $penjualan_detail->penjualan_id = $penjualan_id;
        $penjualan_detail->barang_id    = $request->barang_id;
        $penjualan_detail->harga        = $request->harga;
        $penjualan_detail->jumlah       = $request->jumlah;
        $penjualan_detail->save();
        //update stok
        $barang->stok = $update_stok;
        $barang->save();
        return redirect('admin/penjualan/tambah?id='.$penjualan_id)->with('pesan','Penjualan berhasil disimpan');
    }

    public function hapusDetail($id)
    {
        $penjualan_detail = \App\PenjualanDetail::findOrFail($id);
        //tambah stok karena tidak jadi beli
        $barang       = \App\Barang::findOrFail($penjualan_detail->barang_id);
        $barang->stok = $barang->stok+$penjualan_detail->jumlah;
        $barang->save();
        $penjualan_detail->delete();
        return back()->with('pesan','data penjualan barang berhasil di hapus');
    }
    
    public function cetak($id)
    {
        $data['penjualan'] = \App\Penjualan::findOrFail($id);
        return view('penjualan.cetak',$data);
    }
    
    public function laporan(Request $request)
    {
        $tgl_mulai = $request -> tgl_mulai;
        $tgl_sampai = $request -> tgl_sampai;

        $data['penjualan'] = \App\Penjualan::
                            whereBetween('created_at',[$tgl_mulai,$tgl_sampai])
                            ->where('keterangan','Lunas')->get();
        return view('penjualan.laporan',$data);
    }

}
