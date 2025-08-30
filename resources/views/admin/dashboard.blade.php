@extends('admin.layout')
@section('content')
<div class="min-h-screen bg-gray-50 flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900 text-white flex-shrink-0 flex flex-col">
        <div class="px-6 py-6 font-bold text-xl border-b border-gray-800">Dash UI</div>
        <nav class="flex-1 px-4 py-6">
            <ul class="space-y-2">
                <li><a href="#" class="flex items-center gap-2 px-3 py-2 rounded bg-gray-800 font-semibold"><span class="material-icons">home</span> Dashboard</a></li>
                <li><a href="{{ route('admin.konten') }}" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-gray-800"><span class="material-icons">layers</span> Kelola Konten</a></li>
                <li><a href="#" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-gray-800"><span class="material-icons">lock</span> Authentication</a></li>
                <li><a href="#" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-gray-800"><span class="material-icons">dashboard_customize</span> Layouts</a></li>
                <li><a href="#" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-gray-800"><span class="material-icons">widgets</span> Components</a></li>
                <li><a href="#" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-gray-800"><span class="material-icons">menu</span> Menu Level</a></li>
                <li><a href="#" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-gray-800"><span class="material-icons">description</span> Docs</a></li>
            </ul>
        </nav>
        <div class="px-6 py-4 border-t border-gray-800 text-sm text-gray-400">&copy; 2025 Kampung Admin</div>
    </aside>
    <!-- Main -->
    <main class="flex-1 p-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Projects</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded shadow hover:bg-red-700 transition">Logout</button>
            </form>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-indigo-500 text-white rounded-xl p-6 shadow-lg flex flex-col items-center" data-aos="fade-up">
                <div class="text-2xl font-bold mb-2">Projects</div>
                <div class="text-4xl font-bold mb-1">18</div>
                <div class="text-sm">2 Completed</div>
            </div>
            <div class="bg-indigo-500 text-white rounded-xl p-6 shadow-lg flex flex-col items-center" data-aos="fade-up" data-aos-delay="100">
                <div class="text-2xl font-bold mb-2">Active Task</div>
                <div class="text-4xl font-bold mb-1">132</div>
                <div class="text-sm">28 Completed</div>
            </div>
            <div class="bg-indigo-500 text-white rounded-xl p-6 shadow-lg flex flex-col items-center" data-aos="fade-up" data-aos-delay="200">
                <div class="text-2xl font-bold mb-2">Teams</div>
                <div class="text-4xl font-bold mb-1">12</div>
                <div class="text-sm">1 Completed</div>
            </div>
            <div class="bg-indigo-500 text-white rounded-xl p-6 shadow-lg flex flex-col items-center" data-aos="fade-up" data-aos-delay="300">
                <div class="text-2xl font-bold mb-2">Productivity</div>
                <div class="text-4xl font-bold mb-1">76%</div>
                <div class="text-sm">5% Completed</div>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-xl font-bold mb-4">Active Projects</h2>
            <table class="w-full text-left">
                <thead>
                    <tr class="text-gray-600 border-b">
                        <th class="py-2">Project Name</th>
                        <th class="py-2">Hours</th>
                        <th class="py-2">Priority</th>
                        <th class="py-2">Members</th>
                        <th class="py-2">Progress</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 flex items-center gap-2"><img src="https://img.icons8.com/color/32/dropbox.png" class="inline-block"> Dropbox Design System</td>
                        <td class="py-2">34</td>
                        <td class="py-2"><span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Medium</span></td>
                        <td class="py-2">
                            <div class="flex -space-x-2"><img src="https://randomuser.me/api/portraits/men/1.jpg" class="w-8 h-8 rounded-full border-2 border-white"><span class="bg-gray-200 text-gray-700 px-2 py-1 rounded text-xs">+5</span></div>
                        </td>
                        <td class="py-2">
                            <div class="w-20 h-2 bg-gray-200 rounded">
                                <div class="bg-indigo-500 h-2 rounded" style="width:15%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 flex items-center gap-2"><img src="https://img.icons8.com/color/32/slack-new.png" class="inline-block"> Slack Team UI Design</td>
                        <td class="py-2">47</td>
                        <td class="py-2"><span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">High</span></td>
                        <td class="py-2">
                            <div class="flex -space-x-2"><img src="https://randomuser.me/api/portraits/women/2.jpg" class="w-8 h-8 rounded-full border-2 border-white"><span class="bg-gray-200 text-gray-700 px-2 py-1 rounded text-xs">+3</span></div>
                        </td>
                        <td class="py-2">
                            <div class="w-20 h-2 bg-gray-200 rounded">
                                <div class="bg-indigo-500 h-2 rounded" style="width:35%"></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
@endsection