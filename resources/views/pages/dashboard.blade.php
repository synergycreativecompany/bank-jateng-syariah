<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Nasabah - Bank Jateng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-blue-700">🏦 Bank Jateng</h1>
        </div>
    </nav>

    <!-- Content -->
    <div class="p-6 bg-gradient-to-b from-blue-100 to-white min-h-screen">
        <div class="max-w-5xl mx-auto space-y-8">
            <h1 class="text-3xl font-bold text-gray-700">Selamat Datang, User</h1>

            <!-- 🔗 Navigasi ke Halaman Lain -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <a href="{{ url('/formpinjaman') }}"
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
                            <p class="text-3xl font-bold text-green-600 mt-1">IDR {{ number_format(Auth::user()->saldo, 2, ',', '.') }}</p>
                        </div>
                        <div class="text-green-500 text-4xl">💰</div>
                    </div>
                </div>

                <!-- Total Transaksi -->
                <div class="bg-white p-6 rounded-2xl shadow-md border border-blue-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-gray-500 text-sm">Total Transaksi</h3>
                            <p class="text-3xl font-bold text-blue-600 mt-1">#</p>
                        </div>
                        <div class="text-blue-500 text-4xl">🔄</div>
                    </div>
                </div>
            </div>

            <!-- 📋 Riwayat Transaksi -->
            <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-semibold text-gray-700">Riwayat Transaksi Terbaru</h3>
                    <a href="#" class="text-sm text-blue-500 hover:underline">Lihat Semua</a>
                </div>

                <div class="flex items-center justify-between py-3 border-b last:border-0">
                    <div>
                        <p class="font-medium text-gray-700">##</p>
                        <p class="text-xs text-gray-400">##</p>
                    </div>
                    <div class="text-right">
                        <!-- Nilai nominal transaksi -->
                    </div>
                </div>

                <p class="text-center text-gray-400 py-6">Belum ada transaksi.</p>
            </div>

        </div>
    </div>

</body>
</html>
