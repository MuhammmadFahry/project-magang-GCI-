<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class  Authcontroller extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi kredensial
        $credentials = $request->only('username', 'password');

        // Cek apakah kredensial sesuai dengan yang ada di database
        if (Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
            // Ambil pengguna yang sedang login
            $user = Auth::user();

            // Arahkan pengguna berdasarkan peran mereka
            if ($user->role === 1) {
                // Jika role adalah admin
                return redirect()->route('admin');
            } elseif ($user->role === 2) {
                // Jika role adalah member
                return redirect()->route('member');
            }
        }

        // Jika kredensial salah, arahkan kembali ke halaman login dengan pesan error
        return redirect()->route('login')->withErrors([
            'error' => 'Username atau password salah.',
        ]);
    }

    public function showMemberPage()
    {
        return view('member');
    }

    public function showAdminPage()
    {
        return view('admin');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
