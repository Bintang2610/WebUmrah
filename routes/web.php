<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WisataLuarNegeriController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('about');
});


Route::get('/portofolio', function () {
    return view('porto');
});

// Rute Login
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Rute yang membutuhkan login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard/{type?}', function ($type = null) {
        return view($type ? 'dashboard-data' : 'dashboard', compact('type'));
    })->name('dashboard');

    Route::post('/wisata-luar-negeri/store', [WisataLuarNegeriController::class, 'store'])->name('wisata.store');

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
});

