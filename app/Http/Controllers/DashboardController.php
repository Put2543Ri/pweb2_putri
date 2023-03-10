<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tabel_pesanan;

class DashboardController extends Controller
{
    public function index()
    {
        $tabel_pesanan = tabel_pesanan::all();
        return view('gradient.index',compact(['tabel_pesanan']));
    }

    public function tambahpesan()
    {
        // $tabel_pesanan = tabel_pesanan::all();
        return view('gradient.tambah-pesan');
    }

    public function insertpesan(Request $request)
    {
        $data = $request->all();
        $tabel_pesanan = new tabel_pesanan();
        $tabel_pesanan->nama = $data['nama'];
        $tabel_pesanan->alamat = $data['alamat'];
        $tabel_pesanan->no_telp = $data['no_telp'];
        $tabel_pesanan->jenis_cake = $data['jenis_cake'];
        $tabel_pesanan->jumlah_cake = $data['jumlah_cake'];
        $tabel_pesanan->total_harga = $data['total_harga'];
        $tabel_pesanan->save();
        return redirect()->route('dashboard');

    }

    public function delete(string $id_pesanan)
    {
        tabel_pesanan::where('id_pesanan',$id_pesanan)->delete();
        return redirect()->to('dashboard')->with('success');
    }

}
