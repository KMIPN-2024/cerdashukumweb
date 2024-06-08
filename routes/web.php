<?php

use App\Http\Controllers\BantuanHukumController;
use App\Http\Controllers\PengacaraController;
use App\Http\Controllers\PerdataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UnverifiedPengacaraController;
use App\Models\Pengacara;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $pengacara = Pengacara::all();
    return view('landing', compact('pengacara'));
})->name('landing');

// Halaman data pengacara
Route::resource('/pengacara', PengacaraController::class);
Route::get('/daftar/pengacara/sukses', function () {
    return view('data.pengacara.create-success');
})->name('pengacara.success');
Route::post('/daftar/pengacara', [UnverifiedPengacaraController::class, 'store'])->name('daftar.pengacara');
Route::post('/get-location', [BantuanHukumController::class, 'getLocation'])->name('getLocation');

// Halaman pasal perdata
Route::get('perdata', [PerdataController::class, 'index'])->name('perdata.index');

// Halaman bantuan hukum
Route::get('/bantuan-hukum', [BantuanHukumController::class, 'index'])->name('bantuan-hukum');
Route::post('/bantuan-hukum/pasal', [BantuanHukumController::class, 'getPasal'])->name('bantuan-hukum.getPasal');

// Halaman Tentang Kami
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang-kami');



Route::get('/coming-soon', function () {
    return view('comingsoon.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';