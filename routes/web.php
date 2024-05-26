<?php

use App\Http\Controllers\BantuanHukumController;
use App\Http\Controllers\PerdataController;
use App\Http\Controllers\ProfileController;
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
    return view('landing');
})->name('landing');

// Halaman data pengacara
Route::get('/pengacara', function () {
    return view('data.pengacara.index');
})->name('pengacara');
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
