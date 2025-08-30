<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Kampung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="min-h-screen bg-gray-50 flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white flex-shrink-0 flex flex-col">
            <div class="px-6 py-6 font-bold text-xl border-b border-gray-800">Dash UI</div>
            <nav class="flex-1 px-4 py-6">
                <ul class="space-y-2">
                    <li><a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2 px-3 py-2 rounded {{ request()->routeIs('admin.dashboard') ? 'bg-gray-800 font-semibold' : 'hover:bg-gray-800' }}"><span class="material-icons">home</span> Dashboard</a></li>
                    <li><a href="{{ route('admin.konten') }}" class="flex items-center gap-2 px-3 py-2 rounded {{ request()->routeIs('admin.konten') ? 'bg-gray-800 font-semibold' : 'hover:bg-gray-800' }}"><span class="material-icons">layers</span> Kelola Konten</a></li>
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
        <main class="flex-1">
            @yield('content')
        </main>
    </div>
</body>

</html>