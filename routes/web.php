<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/author', [AuthorController::class,'index']);
Route::get('/category', [CategoryController::class,'index']);
