<?php

use Illuminate\Support\Facades\Route;

Route::get('getAllCats', [CatController::class, 'getAllCats']);


Route::post('postCats', [CatController::class, 'postCat']);

