<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $obj = \App\Pelanggan::all();
        $data['obj'] = $obj;
        return view('pelanggan.index',$data);
    }
    public function tambah()
    {
        $data['obj']           = new \App\Pelanggan();
        $data['action']        = 'PelangganController@simpan';
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         ="POST";
        return view('pelanggan.form',$data);
    }
    public function simpan(request $request)
    {
        $validasi = $this->validate($request,
                [
                'nama' => 'required|unique:pelanggans',            
                ]);         
            
            \App\Pelanggan::create($request->all());
            return redirect('admin/pelanggan')->with('pesan', 'Data sudah disimpan!');
    }
    public function hapus($id)
    {
        $obj = \App\Pelanggan::findOrFail($id);
        $obj->delete();
        return back()->with('pesan','Data sudah dihapus!');
    }
    
    public function edit($id)
    {
       $data['obj']        = \App\Pelanggan::findOrFail($id);        
       $data['method']     = "PUT";
       $data['btn_submit'] = "UPDATE";
       $data['action']     = array('PelangganController@update', $id);
       return view('pelanggan.form',$data);        
    }
    public function update(Request $request, $id)
    {
       $pelanggan = \App\Pelanggan::findOrFail($id);
       $validasi = $this->validate($request,[
         'nama' => 'required|unique:pelanggans,nama,'.$id,
        'alamat' => 'required',            
        ]); 
        $pelanggan->update($request->all());        
        return back()->with('pesan', 'Data diubah!');
    }        
}
