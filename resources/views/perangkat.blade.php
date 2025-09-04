    @extends('layouts.app')
    @section('content')
    <div class="max-w-6xl mx-auto py-10 px-4">
        <h1 class="text-4xl font-bold mb-8 text-gray-900 text-center">Perangkat Kampung</h1>
        <div class="flex flex-col items-center w-full mb-8">
            <div class="transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl cursor-pointer animate__animated animate__fadeInUp bg-gradient-to-br from-green-50 via-white rounded-2xl shadow-lg p-4 flex flex-col items-center border" style="width:220px;max-width:100%;">
                <div class="flex items-center justify-center overflow-hidden rounded-xl mb-4 bg-white border-2" style="width:180px;height:240px;">
                    <img src="/images/kepala-desa.jpg" alt="Kepala Desa" class="rounded-xl shadow-lg transition-transform duration-300 hover:scale-105" style="width:180px;height:260px;object-fit:cover;object-position:0px -20px;" />
                </div>
                <h2 class="font-extrabold text-gray-900 text-lg text-center mb-1">Ajarnalis, SE</h2>
                <p class="font-semibold text-gray-700 text-center text-sm tracking-wide">Penghulu</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
            @php
            $kepalaDesa = $perangkats->firstWhere('jabatan', 'Kepala Desa');
            $perangkatLain = $perangkats->filter(fn($p) => $p->jabatan !== 'Kepala Desa');
            @endphp
            @if($kepalaDesa)
            <div class="md:col-span-2 flex flex-col items-center justify-center bg-gradient-to-br from-blue-50 via-white to-blue-100 rounded-2xl shadow-2xl p-8 animate__animated animate__fadeInLeft">
                <img src="{{ asset('storage/' . $kepalaDesa->gambar) ?? 'https://via.placeholder.com/300' }}" alt="{{ $kepalaDesa->nama }}" class="w-56 h-72 rounded-2xl mb-6 object-contain shadow-xl transition-transform duration-500 hover:scale-105 bg-white" data-aos="zoom-in">
                <h2 class="text-2xl font-extrabold text-blue-700 mb-2">{{ $kepalaDesa->nama }}</h2>
                <div class="text-lg text-gray-700 font-semibold mb-1">{{ $kepalaDesa->jabatan }}</div>
            </div>
            @endif
            <div class="md:col-span-3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($perangkatLain as $perangkat)
                <a href="{{ route('perangkat.detail', ['id' => $perangkat->id]) }}" class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl cursor-pointer animate__animated animate__fadeInUp" data-aos="fade-up">
                    <img src="{{ asset('storage/' . $perangkat->gambar) ?? 'https://via.placeholder.com/150' }}" alt="{{ $perangkat->nama }}" class="w-32 h-32 rounded-lg mb-4 object-cover shadow-lg transition-transform duration-300 hover:scale-105" data-aos="zoom-in">
                    <div class="text-center w-full">
                        <h2 class="text-md font-bold text-gray-900 mb-1">{{ $perangkat->nama }}</h2>
                        <div class="text-sm text-gray-700 font-semibold mb-1">{{ $perangkat->jabatan }}</div>
                    </div>
                </a>
                @empty
                <div class="col-span-3 text-center text-gray-500">Belum ada data perangkat kampung.</div>
                @endforelse
            </div>
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