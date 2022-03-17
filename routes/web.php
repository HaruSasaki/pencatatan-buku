<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::resource('list', BookController::class);
Route::resource('add', BookController::class);
Route::resource('detail', BookController::class);


Route::get('/', [BookController::class, 'index']);
Route::get('/detail/{id}', [BookController::class, 'show']);
Route::get('/add', [BookController::class, 'create']);
Route::post('/add', [BookController::class, 'store']);
Route::get('/edit/{id}', [BookController::class, 'edit']);
Route::post('/edit/{id}', [BookController::class, 'update']);
