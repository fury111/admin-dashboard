<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/table', function () {
    return view('table');
});