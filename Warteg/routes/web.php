<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
}) ->name('beranda');

Route::get('/kasir', function () {
    return view('kasir');
}) ->name('kasir');
