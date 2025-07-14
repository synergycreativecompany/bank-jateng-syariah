<x-app-layout>
    <!-- Content -->
    <div class="p-6 bg-gradient-to-b from-blue-100 to-white min-h-screen">
        <div class="max-w-5xl mx-auto space-y-8">
            <h1 class="text-3xl font-bold text-gray-700">👋 Selamat Datang {{ Auth::user()->name }}, User ID Anda {{ Auth::user()->id }} </h1>

            <!-- 🔗 Navigasi ke Halaman Lain -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <a href="{{ url('/deposito') }}"
                   class="flex items-center justify-between p-5 bg-blue-100 hover:bg-blue-200 transition rounded-2xl shadow text-blue-800 font-semibold">
                    💼 Deposito
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>

                <a href="{{ url('/pinjaman') }}"
                   class="flex items-center justify-between p-5 bg-red-100 hover:bg-red-200 transition rounded-2xl shadow text-red-800 font-semibold">
                    🧾 Pinjaman
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

<!-- 💰 Info Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Saldo -->
    <div class="bg-white p-6 rounded-2xl shadow-md border border-blue-100">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-gray-500 text-sm">Saldo Anda</h3>
                <p class="text-3xl font-bold text-green-600 mt-1">
                    Rp {{ number_format(Auth::user()->balance, 0, ',', '.') }}
                </p>
            </div>
            <div class="text-green-500 text-4xl">$
        </div>
    </div>

</x-app-layout>
