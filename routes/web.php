<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/', [BookController::class, 'index']);
Route::get('/list', [BookController::class, 'index']);
Route::get('/detail/{id}', [BookController::class, 'show']);
Route::delete('/detail/{id}', [BookController::class, 'destroy']);
Route::get('/add', [BookController::class, 'create']);
Route::post('/add', [BookController::class, 'store']);
Route::get('/edit/{id}', [BookController::class, 'edit']);
Route::put('/edit/{id}', [BookController::class, 'update']);