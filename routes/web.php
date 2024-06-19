<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatsController;
use App\Models\Cat;

Route::get('/', function () {
    return view('welcome');
});

Route::get('api/cats', function(){
    return Cat::all();
});


Route::post('api/cats', [CatsController::class, 'postCat'])->name('api.postCats');

