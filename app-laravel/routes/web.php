<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ChessController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', 
[welcomeController::class, 'welcome']);

Route::get('/about',
[aboutController::class, 'about']);

Route::get('/contact',
[contactController::class, 'contact']);

Route::get('/chess',
[chessController::class, 'chess']);

Route::get('/student',
[StudentController::class, 'student']);