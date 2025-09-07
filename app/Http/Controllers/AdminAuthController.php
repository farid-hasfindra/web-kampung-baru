<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;



class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

 public function authenticateLogin(Request $request) {
        $credentials = $request->only('name', 'password');

        if(Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            $user = User::where('name', $request->name)->first();

            if (!$user) {
                return back()->withErrors([
                    'name' => 'name tidak ditemukan.'
                ]);
            } else {
                return back()->withErrors([
                    'password' => 'Password salah.'
                ]);
            }
        }
    }


    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }


    // Form ubah username & password
    public function editAccount()
    {
        $admin = User::first();
        return view('admin.account_edit', compact('admin'));
    }

    // Proses ubah username & password
    public function updateAccount(Request $request)
    {
       $request->validate([
        'username'      => 'required|string|max:255',
        'old_password'  => 'nullable|string',
        'password'      => 'nullable|string|min:6|confirmed', // pakai confirmed untuk konfirmasi password
    ]);

    $admin = User::first();

    // Update username langsung (tidak perlu cek password lama kalau hanya ganti username)
    $admin->name = $request->username;

    // Kalau user isi password baru → wajib cek password lama
    if ($request->filled('password')) {
        if (!$request->filled('old_password')) {
            return back()->withErrors(['old_password' => 'Password lama wajib diisi untuk mengganti password baru']);
        }

        if (!Hash::check($request->old_password, $admin->password)) {
            return back()->withErrors(['old_password' => 'Password lama salah']);
        }

        // Jika benar, update password baru
        $admin->password = Hash::make($request->password);
    }

    $admin->save();

        return redirect()->route('login')->with('success', 'Akun berhasil diubah');
    }

    // Form lupa password
    public function forgotPasswordForm()
    {
        return view('admin.account_forgot');
    }

    // Proses lupa password (reset password sederhana)
    public function forgotPassword(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'new_password' => 'required|min:6',
        ]);
        $admin = Admin::where('username', $request->username)->first();
        if (!$admin) {
            return back()->withErrors(['username' => 'Username tidak ditemukan']);
        }
        $admin->password = Hash::make($request->new_password);
        $admin->save();
        return redirect()->route('login')->with('success', 'Password berhasil direset');
    }
}
