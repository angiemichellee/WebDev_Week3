<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome', ['title' => "Welcome Home"]); 
})->name('welcome');

Route::get('/secondPage', function () {
    return view('secondPage', ['title' => "My Project"]);
})->name('secondPage');

Route::get('/thirdPage', function () {
    return view('thirdPage', ['title' => "Contact"]);
})->name('thirdPage');

