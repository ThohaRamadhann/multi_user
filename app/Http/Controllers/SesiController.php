<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index () 
    {
        return view('login');
    }
    function login(Request $request) {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Pasword wajib diisi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'user') {
                return redirect('user');
            }elseif (Auth::user()->role == 'admin') {
                return redirect('admin');
            }
        }else {
            return redirect('')->withErrors('Username dan Password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function logout(Request $request) {
        Auth::logout(); // Logout pengguna
        $request->session()->invalidate(); // Menghentikan sesi
        $request->session()->regenerateToken(); // Menghasilkan token sesi baru untuk mencegah CSRF
    
        return redirect(''); // Redirect ke halaman utama setelah logout
    }
    
}
