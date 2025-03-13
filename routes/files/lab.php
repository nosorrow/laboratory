<?php

use Illuminate\Support\Facades\Route;

Route::get('/theme/lab', function () {
    return view('themes.lab.index');
});
