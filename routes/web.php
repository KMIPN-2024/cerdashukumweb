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
});
Route::get('/bantuan-hukum', [BantuanHukumController::class, 'index'])->name('bantuan-hukum');
Route::post('/bantuan-hukum/pasal', [BantuanHukumController::class, 'getPasal'])->name('bantuan-hukum.getPasal');

Route::get('/get-pengacara', [BantuanHukumController::class, 'getPengacara'])->name('bantuan-hukum.getPengecara');

Route::get('perdata', [PerdataController::class, 'index'])->name('perdata.index');


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
