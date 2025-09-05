<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublichomeController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomecategoryController;
use App\Http\Controllers\DisplayproductsController;

Route::get('/', [PublichomeController::class, 'index'])->name('public.home');

Route::prefix('category')->name('category.')->group(function () {
    Route::get('/', [HomecategoryController::class, 'index'])->name('index');
    Route::get('/{category}', [HomecategoryController::class, 'show'])->name('show');
});

Route::prefix('displayproducts')->group(function () {
    Route::get('/', [DisplayproductsController::class, 'index'])->name('allproducts');
});

Route::prefix('auth')->name('auth.')->group(function() {
    Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
    Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
    Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
    Route::post('/loginstore', [LoginRegisterController::class, 'loginstore'])->name('loginstore');
});

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('index');
    Route::post('/store', [ContactController::class, 'store'])->name('store');
});

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

