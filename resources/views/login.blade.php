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
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="********" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded font-semibold shadow hover:bg-blue-700 transition">Login</button>
            @if($errors->any())
            <div class="mt-4 text-red-600 text-sm text-center">{{ $errors->first() }}</div>
            @endif
        </form>
        <div class="mt-6 text-center text-gray-500 text-sm">Hanya untuk admin kampung</div>
    </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
@endsection