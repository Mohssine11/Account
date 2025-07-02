<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Registrierung & Login
Route::get('/', [AuthController::class, 'showRegister'])->name('register');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

// Versment (Überweisung)
Route::get('/showversment', [AuthController::class, 'showversment'])->name('versment');
Route::post('/versment', [AuthController::class, 'versment'])->name('versment.store');

// Logout & Account löschen
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::delete('/account/delete', [AuthController::class, 'deleteAccount'])->name('account.delete')->middleware('auth');

// Dashboard (zeigt alle User)
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');