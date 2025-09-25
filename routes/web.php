<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WelcomeController;

/* Route::get('/', function () {
    return view('welcome');
}); */

// Ruta Welcome.blade.php, ruta por la que reenderizo las imagenes del módulo de productos
Route::get('/', [WelcomeController::class, 'index']);


// Ruta de dashboard, donde iran las estadisticas y analiticas de Mascotienda
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    /* 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    */

    // Productos
    Route::resources([
        'products' => ProductController::class
    ]);

    // Ordenes
    Route::resources([
        'orders' => OrderController::class
    ]);

    // Usuarios
    Route::resources([
        'users'=> UserController::class
    ]);

    Route::post('users/search', [UserController::class, 'search']);
    Route::post('products/search', [ProductController::class, 'search']);
    Route::post('orders/search', [OrderController::class, 'search']);
    
});

require __DIR__.'/auth.php';
