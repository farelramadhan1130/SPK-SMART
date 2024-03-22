<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordEmailController;
use App\Http\Controllers\OperatorController;

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

// Route untuk tampilan login dan proses login
Route::get('/', [SesiController::class, 'index'])->name('login');
Route::post('/', [SesiController::class, 'login']);

// Route untuk registrasi pengguna
Route::get('/register', [SesiController::class, 'register'])->name('register');
Route::post('/register', [SesiController::class, 'addUser']);

// Route untuk forgot password
Route::get('/forgot-password', [ForgotPasswordController::class, 'showForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordEmailController::class, 'sendResetLink'])->name('password.email');

// Route untuk reset password
Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

// Route untuk logout
Route::get('/logout', [SesiController::class, 'logout'])->name('logout');

// Route untuk dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [SesiController::class, 'dashboard'])->name('dashboard');
});

// Route Dashboard Admin
Route::get('/users', [OperatorController::class, 'index'])->name('users.index');
Route::get('/users/create', [OperatorController::class, 'create'])->name('users.create');
Route::post('/users', [OperatorController::class, 'store'])->name('users.store');
Route::get('/users/{user}/edit', [OperatorController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [OperatorController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [OperatorController::class, 'destroy'])->name('users.destroy');
