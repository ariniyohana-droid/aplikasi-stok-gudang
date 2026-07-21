<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/barang', function () {
    return view('barang.index');
});

Route::get('/barang/tambah', function () {
    return view('barang.create');
});