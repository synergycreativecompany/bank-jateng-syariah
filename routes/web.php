<?php

use App\Http\Controllers\DepositController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\AdminDepositController;
use App\Http\Controllers\AdminPinjamanController;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/hubunganperusahaan', function () {
    return view('pages.hubunganperusahaan');
});

Route::get('/deposito', function () {
    return view('pages.layanandeposito');
})->name('deposito');;

Route::get('/jadwal', function () {
    return view('pages.layananjadwal');
})->name('jadwal');;

Route::get('/pinjaman', function () {
    return view('pages.layananpinjaman');
})->name('pinjaman');;

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/tatakelola', function () {
    return view('pages.tatakelola');
});

Route::get('/tentangkami', function () {
    return view('pages.tentangkami');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::middleware('auth')->get('/form-pinjaman', function () {
    return view('pinjam.formpinjaman');
});

Route::middleware('auth')->get('/form-deposito', function () {
    return view('deposit.create');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/pinjaman/store', [PinjamanController::class, 'store'])->name('pinjaman.store');
});

Route::get('/search-redirect', function (Request $request) {
    $query = strtolower(trim($request->query('q'))); // buat huruf kecil dan hilangkan spasi berlebih

    switch ($query) {
        case 'deposito':
            return redirect()->route('deposito');
        case 'pinjaman':
            return redirect()->route('pinjaman');
        case 'jadwal':
            return redirect()->route('jadwal');
        default:
            return redirect('/')->with('error', 'Halaman tidak ditemukan: ' . $query);
    }
})->name('search.redirect');


Route::get('/jadwal', [LayananController::class, 'jadwal'])->name('jadwal');
Route::get('/pinjaman', [LayananController::class, 'pinjaman'])->name('pinjaman');
Route::get('/deposito', [LayananController::class, 'deposito'])->name('deposito');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    return view('pages.beranda');
})->middleware(['auth', 'verified'])->name('beranda');

Route::middleware('auth')->group(function () {
    Route::get('/deposit', [DepositController::class, 'create'])->name('deposit.create');
    Route::post('/deposit', [DepositController::class, 'store'])->name('deposit.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/pinjam', [PinjamanController::class, 'create'])->name('pinjaman.create');
    Route::post('/pinjam', [PinjamanController::class, 'store'])->name('pinjaman.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/users', [UserManagementController::class, 'index'])->name('admin.users');
    Route::post('/admin/users', [UserManagementController::class, 'store'])->name('admin.users.store');
    Route::delete('/admin/users/{id}', [UserManagementController::class, 'destroy'])->name('admin.users.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/deposits', [AdminDepositController::class, 'index'])->name('admin.deposits.index');
    Route::post('/admin/deposits/{id}/approve', [AdminDepositController::class, 'approve'])->name('admin.deposits.approve');
    Route::post('/admin/deposits/{id}/reject', [AdminDepositController::class, 'reject'])->name('admin.deposits.reject');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/pinjaman', [AdminPinjamanController::class, 'index'])->name('admin.pinjaman.index');
    Route::post('/admin/pinjaman/{id}/approve', [AdminPinjamanController::class, 'approve'])->name('admin.pinjaman.approve');
    Route::post('/admin/pinjaman/{id}/reject', [AdminPinjamanController::class, 'reject'])->name('admin.pinjaman.reject');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
