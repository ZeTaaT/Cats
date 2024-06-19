<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/cats', [CatsController::class, 'index'])->name('cats.all');

Route::get('/api/cats/create', [CatsController::class, 'create'])->name('cats.create');
Route::post('/api/cats', [CatsController::class, 'store'])->name('cats.store');

