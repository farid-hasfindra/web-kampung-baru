@extends('layouts.app')
@section('content')
<div class="min-h-[70vh] flex items-center justify-center bg-gray-50">
    <div class="bg-white rounded-xl shadow-2xl p-8 w-full max-w-md" data-aos="zoom-in">
        <h1 class="text-2xl font-bold mb-6 text-center text-blue-700">Ubah Username & Password</h1>
        <form method="POST" action="{{ route('admin.account.update') }}">
            @csrf

            <!-- {{-- Tombol ganti password --}}
<div class="mb-4">
    <button type="button" 
            onclick="document.getElementById('password-section').classList.toggle('hidden')" 
            class="text-sm text-blue-600 underline">
        Ganti Password
    </button>
</div> -->

            {{-- Section password, hidden by default --}}
            <div id="password-section">


                <!-- Password Lama -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2 font-semibold" for="old_password">Password Lama</label>
                    <div class="relative">
                        <input type="password"
                            id="old_password"
                            name="old_password"
                            class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                            required
                            autocomplete="new-password">
                    </div>
                </div>
            
                <!-- Username Baru -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2 font-semibold" for="username">Username Baru</label>
                    <input type="text"
                        id="username"
                        name="username"
                        value="{{ $admin->username }}"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                        required
                        autocomplete="off">
                </div>

                {{-- Password Baru --}}
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2 font-semibold" for="password">Password Baru</label>
                    <input type="password" id="password" name="password"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                        placeholder="Password baru">
                </div>

                {{-- Konfirmasi Password Baru --}}
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2 font-semibold" for="password_confirmation">Konfirmasi Password Baru</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                        placeholder="Ulangi password baru">
                </div>
            </div>


            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded font-semibold shadow hover:bg-blue-700 transition">
                Simpan Perubahan
            </button>

            {{-- Error Message --}}
            @if($errors->any())
            <div class="mt-4 text-red-600 text-sm text-center">{{ $errors->first() }}</div>
            @endif
        </form>
        <div class="mt-6 text-center text-gray-500 text-sm">Pastikan data benar sebelum menyimpan.</div>
    </div>
</div>

{{-- Script toggle password tetap sama --}}
<!-- <script>
    function togglePassword(inputId, iconId) {
        const passwordInput = document.getElementById(inputId);
        const eyeIcon = document.getElementById(iconId);
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.innerHTML = `<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.978 9.978 0 012.042-3.362m3.087-2.968A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.978 9.978 0 01-4.422 5.568M15 12a3 3 0 11-6 0 3 3 0 016 0z' /><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M3 3l18 18' />`;
        } else {
            passwordInput.type = 'password';
            eyeIcon.innerHTML = `<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 12a3 3 0 11-6 0 3 3 0 016 0z' /><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268-2.943-9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z' />`;
        }
    }
</script> -->
@endsection