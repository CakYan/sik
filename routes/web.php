<?php

use App\Http\Controllers\BedController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\VisiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [LoginController::class, 'index']);
Route::post('/login_validation', [LoginController::class, 'authenticate']);
// Route::group(['middleware' => 'login_valid'], function(){
//     Route::get('/dashboard', [HomeController::class, 'index']);
// });

Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/bed', [BedController::class, 'index']);
Route::get('/visite/{id}', [VisiteController::class, 'index']);

Route::post('/update_pasien', [PasienController::class, 'update'])->name('update_pasien');
Route::post('/upload', [VisiteController::class, 'uploadImage'])->name('ckeditor.upload');

// Route::get('/editor', function(){
//     return view('ck-editor');
// });