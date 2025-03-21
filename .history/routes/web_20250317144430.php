<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home']);
Route::get('/detail/{id}', [ProductController::class, 'detail']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);
