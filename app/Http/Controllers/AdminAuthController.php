<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            // Simpan session login admin
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['username' => 'Username atau password salah']);
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('login');
    }

    // Form ubah username & password
    public function editAccount()
    {
        $admin = Admin::first();
        return view('admin.account_edit', compact('admin'));
    }

    // Proses ubah username & password
    public function updateAccount(Request $request)
    {
        $request->validate([
            'old_username' => 'required',
            'old_password' => 'required',
            'username' => 'required',
            'password' => 'nullable|min:6',
        ]);
        $admin = Admin::first();
        // Validasi username dan password lama
        if ($request->old_username !== $admin->username || !Hash::check($request->old_password, $admin->password)) {
            return back()->withErrors(['old_username' => 'Username atau password lama salah']);
        }
        $admin->username = $request->username;
        if ($request->filled('password')) {
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
