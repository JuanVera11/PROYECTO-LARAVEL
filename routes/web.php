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

Route::middleware(['auth'])->group(function () {
    Route::resource('orders', OrderController::class);
});

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


    // Ruta de post de users a search que pasa por el controller - UseController
    Route::post('users/search', [UserController::class, 'search']);

    // Ruta de post de products a search que posa por el controller - ProductController
    Route::post('products/search', [ProductController::class, 'search']);

    // Ruta de post de orders a search que pasa por el controller - OrderController 
    Route::post('orders/search', [OrderController::class, 'search']);

});

require __DIR__.'/auth.php';