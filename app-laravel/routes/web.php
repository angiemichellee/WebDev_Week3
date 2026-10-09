<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome', ['title' => "Welcome Home"]); 
})->name('welcome');

Route::get('/secondPage', function () {
    $projects = ['Calculator', 'Accounting', 'Studentreport', 'POS Resto', 'Online Store', 'Pet Shop'];
    return view('secondPage', ['judul' => "My Project", 'project' => $projects]);
})->name('secondPage');

Route::get('/thirdPage', function () {
    return view('thirdPage', ['title' => "Contact"]);
})->name('thirdPage');

Route::get('/new', function () {
    return view('new', ['title' => "Blade Checkerboard"]); 
})->name('new');
