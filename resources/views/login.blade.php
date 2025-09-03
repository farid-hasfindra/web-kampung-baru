@extends('layouts.app')
@section('content')
<div class="min-h-[70vh] flex items-center justify-center bg-gray-50">
    <div class="bg-white rounded-xl shadow-2xl p-8 w-full max-w-md" data-aos="zoom-in">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-700">Login Admin</h1>
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 mb-2 font-semibold" for="username">Username</label>
                <input type="text" id="username" name="username" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="admin" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 mb-2 font-semibold" for="password">Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition pr-10" placeholder="********" required>
                    <button type="button" onclick="togglePassword()" class="absolute right-2 top-2 text-gray-500 focus:outline-none" tabindex="-1">
                        <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </div>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded font-semibold shadow hover:bg-blue-700 transition">Login</button>
            @if($errors->any())
            <div class="mt-4 text-red-600 text-sm text-center">{{ $errors->first() }}</div>
            @endif
        </form>
        <div class="mt-6 flex flex-col gap-2 items-center">
            <a href="{{ route('admin.account.edit') }}" class="text-blue-600 hover:underline font-semibold">Ubah Username & Password</a>
            <div class="text-center text-gray-500 text-sm mt-2">Hanya untuk admin kampung</div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });

    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.innerHTML = `<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.978 9.978 0 012.042-3.362m3.087-2.968A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.978 9.978 0 01-4.422 5.568M15 12a3 3 0 11-6 0 3 3 0 016 0z' /><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M3 3l18 18' />`;
        } else {
            passwordInput.type = 'password';
            eyeIcon.innerHTML = `<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 12a3 3 0 11-6 0 3 3 0 016 0z' /><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z' />`;
        }
    }
</script>
@endsection