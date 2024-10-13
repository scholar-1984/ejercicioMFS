<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\QueryController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::controller(AuthorController::class)->group(function () {
    Route::get('/author', 'index')->name('author.index');
    Route::get('/author/new', 'create')->name('author.create');
    Route::post('/author', 'store')->name('author.store');
});

Route::get('/category', [CategoryController::class, 'index']);

Route::controller(BookController::class)->group(function () {
    Route::get('/book', 'index')->name('book.index');
    Route::get('/book/new', 'create')->name('book.new');
    Route::post('/book', 'store')->name('book.store');
});

Route::get('/sale', [SaleController::class, 'index']);

Route::controller(QueryController::class)->group(function () {
    Route::get('/queryORM1', 'QueryORM1');
    Route::get('/queryORM2', 'QueryORM2');
    Route::get('/queryORM3', 'QueryORM3');
    Route::get('/queryORM4', 'QueryORM4');
    Route::get('/queryORM5', 'QueryORM5');
    Route::get('/queryORM6', 'QueryORM6');
    Route::get('/queryDB1', 'QueryDB1');
    Route::get('/queryDB2', 'QueryDB2');
    Route::get('/queryDB3', 'QueryDB3');
    Route::get('/queryDB4', 'QueryDB4');
    Route::get('/queryDB5', 'QueryDB5');
    Route::get('/queryDB6', 'QueryDB6');
});

Route::controller(ImageController::class)->group(function(){
    Route::get('/image/{book_id}/edit','edit')->name('image.edit');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
