<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    $data = [
        'labels' => ['2020', '2021', '2022', '2023', '2024'],
        'values' => [100, 200, 300, 400, 500]
    ];
    return view('dashboard', compact('data'));
});
Route::get('/data', function () {
    return view('data');
});
