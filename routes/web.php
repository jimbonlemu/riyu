<?php

use App\Controllers\UserController;
use Riyu\Router\Route;

Route::get('/', [UserController::class, 'index']);
Route::get('/{page}', [UserController::class, 'index']);
