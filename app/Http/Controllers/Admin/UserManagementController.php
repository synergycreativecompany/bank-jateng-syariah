<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserManagementController extends Controller
{
    public function index()
    {
    if (Auth::user()->role !== 'admin') {
        abort(403, 'Anda tidak memiliki akses.');
    }

    $users = \App\Models\User::where('role', '!=', 'admin')->get();
    return view('admin.users.index', compact('users'));
    }

    public function store(Request $request)
    {
        
        if (Auth::user()->role !== 'admin') {
        abort(403, 'Anda tidak memiliki akses.');
        }

        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => 'user', // default role
        ]);

        return redirect()->route('admin.users')->with('success', 'User berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        if (Auth::user()->role !== 'admin') {
        abort(403, 'Anda tidak memiliki akses.');
        }

        $user = User::findOrFail($id);

        if ($user->role === 'admin') {
            return redirect()->route('admin.users')->with('error', 'Tidak bisa menghapus admin.');
        }

        $user->delete();

        return redirect()->route('admin.users')->with('success', 'User berhasil dihapus.');
    }
}
