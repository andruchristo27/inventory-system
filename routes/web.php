<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () { return view('welcome');});
    Route::get('/scann', function () { return view('scann');});
    Route::get('/add', [ProductController::class, 'index'])->name('result');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/create', [ProductController::class, 'create']);
    Route::post('/post', [ProductController::class, 'store']);
    Route::post('/validasi', [ProductController::class, 'validasi'])->name('validasi');
    Route::get('/result', [ProductController::class, 'result']);
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
