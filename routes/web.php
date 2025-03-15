<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('Dashboard/dashboard', ['title' => 'Dashboard']);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/data-rekapitulasi', function () {
    return view('data_rekapitulasi', ['title' => 'Data rekapitulasi']);
})->middleware(['auth', 'verified'])->name('data-rekapitulasi');

Route::get('/produk', function () {
    return view('produk', ['title' => 'Produk']);
})->middleware(['auth', 'verified'])->name('produk');

Route::get('/pengaturan', function () {
    return view('pengaturan', ['title' => 'Pengaturan']);
})->middleware(['auth', 'verified'])->name('pengaturan');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
