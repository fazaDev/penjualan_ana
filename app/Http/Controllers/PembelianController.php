<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $obj = \App\Pembelian::with('barang')->get();
        $data['obj'] = $obj;
        // dd($data);
        return view('pembelian.index',$data);
    }

    public function tambah()
    {
         $data['obj']            = new \App\Pembelian();
        $data['action']         = 'PembelianController@simpan';
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         = "POST";
        return view ('pembelian.form',$data);
        
    }

    public function simpan(Request $request)
    {
        $validasi = $this->validate($request,
            [
                'barang_id'          => 'required',
                'nama_pemasok'      => 'required',
                'jumlah'    => 'required|integer',
                'harga'          => 'required|integer',
            ]);         
            
            \App\Pembelian::create($request->all());
            return redirect('admin/pembelian')->with('pesan', 'Data sudah disimpan!');
    }

    public function hapus($id)
    {
        $obj = \App\Pembelian::findOrFail($id);
        $obj->delete();
        return back()->with('pesan','Data sudah dihapus!');
    }

}
