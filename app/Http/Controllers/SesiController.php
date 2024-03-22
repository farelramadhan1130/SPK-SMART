<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SesiController extends Controller
{
    // menampilkan halaman login.
    function index()
    {
        return view('login');
    }
    // memvalidasi data masukan dari form login
    function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email Harus Diisi',
                'password.required' => 'Password Harus Diisi',
            ]
        );

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        } else {
            return redirect()->route('login')->withErrors('Username Atau Password Salah')->withInput();
        }
    }

    // Menampilkan halaman dashboard sesuai dengan peran pengguna
    public function dashboard()
    {
        if (Auth::user()->role == 'Marketing') {
            return view('dashboard.marketing.layouts.ao-sidebar');
        } elseif (Auth::user()->role == 'Admin') {
            return view('dashboard.operator.layouts.ope-sidebar');
        } else {
            // Handle jika peran tidak diketahui atau tidak sesuai
            return redirect()->route('login')->withErrors('Role tidak valid');
        }
    }

    function register(Request $request)
    {
        return view('auth.register');
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'nomer_telp' => 'required|string|max:15',
            'password' => 'required|string|min:6',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // optional: tambahkan validasi untuk foto
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            $foto->storeAs('public/users/images', $fotoName);
            $fotoPath = 'storage/users/images/' . $fotoName;
        }

        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomer_telp' => $request->nomer_telp,
            'password' => Hash::make($request->password),
            'foto' => $fotoPath,
        ]);

        return response()->json(['message' => 'User registered successfully', 'user' => $user]);
    }

    // mengelola proses logout pengguna.
    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
