<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/dashboard/{type}', function ($type) {
    return view('dashboard-data', compact('type'));
})->name('dashboard');

Route::get('/transaction', function () {
    return redirect()->route('transaction', 'datawl');
});

Route::get('/transaction/{type}', function ($type) {
    return view('transaction', compact('type'));
})->name('transaction');

Route::get('/dashboard/{type}/tambahdata', function ($type) {
    return view('add-data', compact('type'));
})->name('dashboard.add-data');

Route::get('/transaction/{type}/tambahdata', function ($type) {
    return view('add-data', compact('type'));
})->name('transaction.add-data');

Route::get('/ubahdata', function () {
    return view('change-data');
});

