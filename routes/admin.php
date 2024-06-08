<?php

use App\Http\Controllers\PengacaraController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UnverifiedPengacaraController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group. Make something great!
|
*/



//route prefix admin and middleware admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.index');
    Route::resource('verifikasi-pengacara', UnverifiedPengacaraController::class);
    Route::get('pengacara', [PengacaraController::class, 'showAdmin'])->name('admin.pengacara.show');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

