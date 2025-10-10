<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Ambil user berdasarkan username
        $user = User::where('username', $request->username)->first();

        if (!$user) {
            return back()->with('error', 'Username tidak ditemukan');
        }

        // Verifikasi password manual
        if (!Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Password salah');
        }

        // Simpan data user ke session
        session([
            'username' => $user->username,
            'role' => $user->role,
            'user_id' => $user->id,
        ]);

        // Redirect sesuai role
        if ($user->role === 'admin') {
            return redirect('/admin');
        } elseif ($user->role === 'guru') {
            return redirect('/guru');
        } else {
            return redirect('/siswa');
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
