<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $obj = \App\Buku::all();
        $data['obj'] = $obj;
        return view('buku.index',$data);
    }
    public function tambah()
    {
        $data['obj']           = new \App\Buku();
        $data['action']        = 'BukuController@simpan';
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         ="POST";
        return view('buku.form',$data);
    }
    public function simpan(request $request)
    {
        $validasi = $this->validate($request,
                [
                'judul' => 'required|unique:bukus',            
                ]);         
            
            \App\Buku::create($request->all());
            return redirect('admin/buku')->with('pesan', 'Data sudah disimpan!');
    }
    public function hapus($id)
    {
        $obj = \App\Buku::findOrFail($id);
        $obj->delete();
        return back()->with('pesan','Data sudah dihapus!');
    }
    
    public function edit($id)
    {
       $data['obj']        = \App\Buku::findOrFail($id);        
       $data['method']     = "PUT";
       $data['btn_submit'] = "UPDATE";
       $data['action']     = array('BukuController@update', $id);
       return view('buku.form',$data);        
    }
    public function update(Request $request, $id)
    {
       $buku = \App\Buku::findOrFail($id);
       $validasi = $this->validate($request,[
         'judul' => 'required|unique:bukus,judul,'.$id,            
        ]); 
        $buku->update($request->all());        
        return back()->with('pesan', 'Data diubah!');
    }
}
