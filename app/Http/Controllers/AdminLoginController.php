<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    //
    public function index()
    {
        // Jika pengguna sudah terotentikasi, arahkan langsung ke halaman admin
        if (auth()->check() && auth()->user()->role == 'admin') {
            return redirect()->route('admin.dashboard.index');
        }

        return view('admin/auth/login', [
            'title' => 'Login Admin'
        ]);
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {
            if (auth()->user()->role == 'admin') {
                //hapus session dan buat session baru
                session()->regenerate();
                //arahkan ke halaman admin
                return redirect()->route('admin.dashboard.index');
            } else {
                return redirect()->route('home');
            }
        } else {
            return back()->with('loginError', 'Login failed!'); //untuk mengarahkan ke halaman yang di tuju sebelumnya
        }
    }


    //logout
    public function logout(Request $request)
    {

        auth()->logout();
        $request->session()->invalidate(); //untuk menghapus session yang lama dan membuat session yang baru
        $request->session()->regenerateToken(); //untuk menghapus session yang lama dan membuat session yang baru

        return redirect()->route('login');
    }
}
