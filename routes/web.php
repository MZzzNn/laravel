<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/posts', [PostController::class,"index"]);
Route::get('/posts/create', [PostController::class,"create"]);
Route::post('/posts', [PostController::class,"store"]);
Route::get('/posts/{id}', [PostController::class,"show"]);
Route::get('/posts/{id}/edit', [PostController::class,"edit"]);

