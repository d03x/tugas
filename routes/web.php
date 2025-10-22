<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'login_handle'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');

Route::prefix('dashboard')->name('index.')->group(function () {
    Route::get('', HomeController::class)->name('index');
});
