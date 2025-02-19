<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/data', function () {
    return view('data');
});
Route::get('/dashboard/datajh', [DashboardController::class, 'dataJh'])->name('dashboard.datajh');
