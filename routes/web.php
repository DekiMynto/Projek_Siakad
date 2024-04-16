<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// http://127.0.0.1:8000 // Link Website
Route::get('/', function () {
    return view('login');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register'); // Beri nama 'register' untuk rute ini
    Route::post('/register', [AuthController::class, 'registerPost']); // Tidak perlu memberi nama untuk rute POST register
    Route::get('/login', [AuthController::class, 'login'])->name('login'); // Beri nama 'login' untuk rute ini
    Route::post('/login', [AuthController::class, 'loginPost']); // Tidak perlu memberi nama untuk rute POST login
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'home']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
