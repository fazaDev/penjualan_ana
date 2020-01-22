<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\User;
use App\Pelanggan;
use App\Penjualan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::count();
        $pelanggan = Pelanggan::count();
        $barang = Barang::count();
        $penjualan = Penjualan::count();

        return view('home.index', compact('user', 'pelanggan', 'barang', 'penjualan'));
    }
}
