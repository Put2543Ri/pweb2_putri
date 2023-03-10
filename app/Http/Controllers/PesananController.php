<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabel_pesanan;
class PesananController extends Controller
{
    public function index()
    {
        $pesanan = pesanan::all();
        return view('gradient.form',compact(['pesanan']));
    }

    public function store(Request $request)
    {
        pesanan::create($request->except(['_token','submit']));
        return redirect('/pesanan');
    }
}
