<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DepositController extends Controller
{

    public function create()
    {
        return view('deposit.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'amount' => 'required|numeric|min:10000',
            'deposit_date' => 'required|date',
        ]);

        Deposit::create([
            'user_id' => Auth::id(),
            'amount' => $request->amount,
            'deposit_date' => $request->deposit_date,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Deposito berhasil diajukan.');
    }
}


