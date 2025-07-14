<?php

namespace App\Http\Controllers;

use App\Models\Pinjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPinjamanController extends Controller
{
    public function index()
    {
            if (!Auth::user() || !Auth::user()->is_admin) {
             abort(403, 'Anda tidak punya akses ke halaman ini.');
            }
        $pinjamans = Pinjaman::with('user')->orderBy('created_at', 'desc')->get();
        return view('admin.pinjaman.index', compact('pinjamans'));
    }

    public function approve($id)
    {
        $pinjaman = Pinjaman::findOrFail($id);

        if ($pinjaman->status === 'pending') {
            $pinjaman->status = 'approved';
            $pinjaman->save();

            // Tambahkan saldo user
            $pinjaman->user->balance += $pinjaman->amount;
            $pinjaman->user->save();

            return back()->with('success', 'pinjaman disetujui dan saldo ditambahkan.');
        }

        return back()->with('error', 'pinjaman sudah diproses.');
    }

    public function reject($id)
    {
        $pinjaman = Pinjaman::findOrFail($id);

        if ($pinjaman->status === 'pending') {
            $pinjaman->status = 'rejected';
            $pinjaman->save();

            return back()->with('success', 'pinjaman ditolak.');
        }

        return back()->with('error', 'pinjaman sudah diproses.');
    }
}
