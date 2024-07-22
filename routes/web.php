<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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
    return view('welcome');
});

Route::get('halo', function () {
	return "Hello World. Selamat datang halaman Tutorial Belajar Laravel Serie 1";
});

Route::get('kontak', function () {
	return view('kontak');
});

// Route untuk menampilkan data siswa
Route::get('/siswa', [SiswaController::class, 'index']);