<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;
use Illuminate\Support\Facades\Auth;

class PinjamanController extends Controller
{
    public function create()
    {
        return view('pinjam.formpinjaman');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:10000',
            'pinjaman_date' => 'required|date',
        ]);

        Pinjaman::create([
            'user_id' => Auth::id(),
            'amount' => $request->amount,
            'pinjaman_date' => $request->pinjaman_date,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'pinjaman berhasil diajukan.');
    }
}

