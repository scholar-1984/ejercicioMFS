<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SaleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/author', [AuthorController::class,'index']);
Route::get('/category', [CategoryController::class,'index']);
Route::get('/book', [BookController::class,'index']);
Route::get('/sale', [SaleController::class,'index']);
Route::get('/book/new', [BookController::class,'create']);
Route::post('/book/new',[BookController::class,'store']);

