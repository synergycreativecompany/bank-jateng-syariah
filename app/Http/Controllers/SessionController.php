<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use app\Models\User;

class SessionController extends Controller
{
    function signin()
    {
        return view("sesi/signin");
    }

    function login(Request $request)
    {
        Session::flash('email', $request->input('email'));

        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ], [
            'email.required'=>'Email wajib Di isi',
            'password.required'=>'password wajib Di isi',
        ]);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect ('/');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/sesi');
        }
    }
}