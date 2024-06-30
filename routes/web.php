<?php

use App\Http\Controllers\Auth\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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
    return view('home');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['guest', 'throttle:60,1'])->group(function () {
    // Admin
    Route::get('/admin-login', [AdminAuthController::class, 'index'])->name('admin.login');
    Route::post('/admin-login', [AdminAuthController::class, 'authenticate'])->name('admin.login');

    // User
    Route::get('/login', [AuthController::class, 'index'])->name('user.login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('user.login');

    // Register
    Route::get('/register', [AuthController::class, 'create'])->name('user.register');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

Route::middleware(['role:administrator', 'auth'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
});

Route::middleware(['role:user', 'auth'])->group(function () {
    Route::get('/products', function () {
        return view('products.index');
    });
});

Route::get('/error', function () {
    return view('error.error');
});
