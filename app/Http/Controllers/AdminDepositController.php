<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDepositController extends Controller
{
    public function index()
    {
            if (!Auth::user() || !Auth::user()->is_admin) {
             abort(403, 'Anda tidak punya akses ke halaman ini.');
            }
        $deposits = Deposit::with('user')->orderBy('created_at', 'desc')->get();
        return view('admin.deposits.index', compact('deposits'));
    }

    public function approve($id)
    {
        $deposit = Deposit::findOrFail($id);

        if ($deposit->status === 'pending') {
            $deposit->status = 'approved';
            $deposit->save();

            // Tambahkan saldo user
            $deposit->user->balance += $deposit->amount;
            $deposit->user->save();

            return back()->with('success', 'Deposit disetujui dan saldo ditambahkan.');
        }

        return back()->with('error', 'Deposit sudah diproses.');
    }

    public function reject($id)
    {
        $deposit = Deposit::findOrFail($id);

        if ($deposit->status === 'pending') {
            $deposit->status = 'rejected';
            $deposit->save();

            return back()->with('success', 'Deposit ditolak.');
        }

        return back()->with('error', 'Deposit sudah diproses.');
    }
}
