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
Route::get('/dashboard/datajamaahhaji', [DashboardController::class, 'dataJh'])->name('dashboard.datajh');
Route::get('/dashboard/datajamaahumrah', [DashboardController::class, 'dataJu'])->name('dashboard.dataju');
Route::get('/dashboard/datawisataluarnegeri', [DashboardController::class, 'dataWl'])->name('dashboard.datawl');
Route::get('/dashboard/datawisatadomestik', [DashboardController::class, 'dataWd'])->name('dashboard.datawd');
