<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
})->name('login');


    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
    Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/member', [AuthController::class, 'showMemberPage'])->name('member');
        Route::get('/admin', [AuthController::class, 'showAdminPage'])->name('admin');
    });

    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::post('/register', [RegisterController::class, 'register']);