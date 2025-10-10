<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Halaman awal
Route::get('/', function () {
    return view('welcome');
});

// Login routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// Role-based routes
Route::get('/admin', function () {
    return "Selamat datang Admin!";
})->middleware('role:admin');

Route::get('/guru', function () {
    return "Selamat datang Guru!";
})->middleware('role:guru');

Route::get('/siswa', function () {
    return "Selamat datang Siswa!";
})->middleware('role:siswa');
