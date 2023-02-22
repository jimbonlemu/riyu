<?php

use App\Controllers\UserController;
use Riyu\Router\Route;

Route::get('/', fn () => view('home'));