<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\QueryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/author', [AuthorController::class,'index']);
Route::get('/category', [CategoryController::class,'index']);
Route::get('/book', [BookController::class,'index']);
Route::get('/sale', [SaleController::class,'index']);
Route::get('/book/new', [BookController::class,'create']);
Route::post('/book/new',[BookController::class,'store']);
Route::get('/queryORM1',[QueryController::class,'QueryORM1']);
Route::get('/queryORM2',[QueryController::class,'QueryORM2']);
Route::get('/queryORM3',[QueryController::class,'QueryORM3']);
Route::get('/queryORM4',[QueryController::class,'QueryORM4']);
Route::get('/queryORM5',[QueryController::class,'QueryORM5']);
Route::get('/queryORM6',[QueryController::class,'QueryORM6']);
Route::get('/queryDB1',[QueryController::class,'QueryDB1']);
Route::get('/queryDB2',[QueryController::class,'QueryDB2']);
Route::get('/queryDB3',[QueryController::class,'QueryDB3']);
Route::get('/queryDB4',[QueryController::class,'QueryDB4']);
Route::get('/queryDB5',[QueryController::class,'QueryDB5']);
Route::get('/queryDB6',[QueryController::class,'QueryDB6']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
