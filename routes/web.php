<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublichomeController;

Route::get('/', [PublichomeController::class, 'index'])->name('public.home');

Route::get('/admin', [HomeController::class, 'index'])->name('home');

Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('edit');
    Route::post('/{category}/update', [CategoryController::class, 'update'])->name('update');
    Route::get('/{category}/delete', [CategoryController::class, 'delete'])->name('delete');
    Route::get('/{catgory}/status', [CategoryController::class, 'status'])->name('status');

});

Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::post('/{product}/update', [ProductController::class, 'update'])->name('update');
    Route::get('/{product}/delete', [ProductController::class, 'delete'])->name('delete');
});

Route::prefix('users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('edit');
    Route::post('/{user}/update', [UserController::class, 'update'])->name('update');
    Route::get('/{user}/delete', [UserController::class, 'delete'])->name('delete');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

