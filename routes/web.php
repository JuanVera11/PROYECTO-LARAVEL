<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Sección de Alimentación - Rutas ahora son públicas
Route::get('/index2', function () {
    return view('layouts.index2');  
})->name('index2');

Route::get('/index3', function () {
    return view('layouts.index3');
})->name('index3');

Route::get('/index4', function () {
    return view('layouts.index4');
})->name('index4');

Route::get('/index5', function () {
    return view('layouts.index5');
})->name('index5');

// Sección de Dashboard - Esta sí debe estar protegida
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Sección de Juguetes - Rutas ahora son públicas
Route::get('/juguetes1', function () {
    return view('layouts.juguetes1_perros');
})->name('juguetes1');

Route::get('/juguetes2', function () {
    return view('layouts.juguetes2_gatos');
})->name('juguetes2');

Route::get('/juguetes3', function () {
    return view('layouts.juguetes3_loros');
})->name('juguetes3');

Route::get('/juguetes4', function () {
    return view('layouts.juguetes4_hamsters');
})->name('juguetes4');


// Sección de Cuidado personal y Recreación - Rutas ahora son públicas
Route::get('/cuidados1', function () {
    return view('layouts.cuidados1_perros');
})->name('cuidados1');

Route::get('/cuidados2', function () {
    return view('layouts.cuidados2_gatos');
})->name('cuidados2');

Route::get('/cuidados3', function () {
    return view('layouts.cuidados3_loros');
})->name('cuidados3');

Route::get('/cuidados4', function () {
    return view('layouts.cuidados4_hamsters');
})->name('cuidados4');

Route::middleware('auth')->group(function () {
   /*  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

 */
// Productos
    Route::resources([
        'products' => ProductController::class
    ]);

// Usuarios
    Route::resources([
        'users'=> UserController::class
    ]);
});



require __DIR__.'/auth.php';