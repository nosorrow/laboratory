<?php

use Illuminate\Support\Facades\Route;

Route::get('/theme/lab', function () {
    return view('themes.lab.index-3');
})->name('theme.lab');

Route::get('/theme/lab-2', function () {
    return view('themes.lab.index-2');
})->name('theme.lab-2');
