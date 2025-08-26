<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/admin', function () {
    // Trang admin
})->middleware('role:admin');