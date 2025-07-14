<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
public function jadwal()
    {
        return view('pages.layananjadwal');
    }

    public function pinjaman()
    {
        return view('pages.layananpinjaman');
    }

    public function deposito()
    {
        return view('pages.layanandeposito');
    }
}
