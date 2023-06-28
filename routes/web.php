<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return redirect('/login');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [ProductController::class, 'index'])->name('home');
    Route::get('/product/all', [ProductController::class, 'index'])->name('all');
    Route::get('/product/create', [ProductController::class, 'create'])->name('create');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::resource('product', ProductController::class);
});