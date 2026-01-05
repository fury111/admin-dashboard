<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/charts', function () {
    return view('charts');
});

Route::get('/table', function () {
    return view('table');
});