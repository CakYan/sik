<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BedController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\VisiteController;

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
    return view('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/bed', [BedController::class, 'index']);
    Route::get('/visite/{id}', [VisiteController::class, 'index']);

    Route::post('/add_pasien', [PasienController::class, 'store']);
    Route::post('/update_pasien', [PasienController::class, 'update'])->name('update_pasien');

    Route::post('/visite_dokter/{id}', [VisiteController::class, 'add_dokter']);
    Route::post('/visite_perawat/{id}', [VisiteController::class, 'add_perawat']);
    Route::post('/visite_gizi/{id}', [VisiteController::class, 'add_gizi']);
    Route::post('/visite_apoteker/{id}', [VisiteController::class, 'add_apoteker']);
});

require __DIR__.'/auth.php';
