<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Sección de Alimentación 
Route::get('/index2', function () {
    return view('layouts.index2');  
})->middleware(['auth', 'verified'])->name('index2');

Route::get('/index3', function () {
    return view('layouts.index3');
})->middleware(['auth', 'verified'])->name('index3');

Route::get('/index4', function () {
    return view('layouts.index4');
})->middleware(['auth', 'verified'])->name('index4');

Route::get('/index5', function () {
    return view('layouts.index5');
})->middleware(['auth', 'verified'])->name('index5');

// Sección de Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Sección de Juguetes 

Route::get('/juguetes1', function () {
    return view('layouts.juguetes1_perros');
})->middleware(['auth', 'verified'])->name('juguetes1');

Route::get('/juguetes2', function () {
    return view('layouts.juguetes2_gatos');
})->middleware(['auth', 'verified'])->name('juguetes2');

Route::get('/juguetes3', function () {
    return view('layouts.juguetes3_loros');
})->middleware(['auth', 'verified'])->name('juguetes3');

Route::get('/juguetes4', function () {
    return view('layouts.juguetes4_hamsters');
})->middleware(['auth', 'verified'])->name('juguetes4');


// Seccíón  de Cuidado personal y Recreación 

Route::get('/cuidados1', function () {
    return view('layouts.cuidados1_perros');
})->middleware(['auth', 'verified'])->name('cuidados1');

Route::get('/cuidados2', function () {
    return view('layouts.cuidados2_gatos');
})->middleware(['auth', 'verified'])->name('cuidados2');

Route::get('/cuidados3', function () {
    return view('layouts.cuidados3_loros');
})->middleware(['auth', 'verified'])->name('cuidados3');

Route::get('/cuidados4', function () {
    return view('layouts.cuidados4_hamsters');
})->middleware(['auth', 'verified'])->name('cuidados4');

 Route::middleware('auth')->group(function () {
  /*  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); */


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
