<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WishController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);

// Route::get('/adminpanel', [AdminController::class, 'index']);
// Route::get('/adminpanel/guests', [AdminController::class, 'guests'])->name('guest.data');

Route::get('/wishes', [WishController::class, 'index'])->name('wish.index');
Route::post('/wish', [WishController::class, 'store'])->name('wish.store');
