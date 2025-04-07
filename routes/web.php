<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WisataLuarNegeriController;
use App\Http\Controllers\WisataDomestikController;
use App\Http\Controllers\JamaahUmrahController;
use App\Http\Controllers\JamaahHajiController;

use App\Models\Transaksi;

use App\Http\Controllers\TransaksiController;

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

Route::get('/dashboard/datawl', function () {
    return view('datawl');
});

Route::get('/dashboard/datawd', function () {
    return view('datawd');
});

Route::get('/dashboard/dataju', function () {
    return view('dataju');
});

Route::get('/dashboard/datajh', function () {
    return view('datajh');
});

Route::get('/tambahdatajh', function () {
    return view('datajhadd');
});

Route::get('/transaction/datawl', function () {
    return view('trcswl');
});

Route::get('/forgotpassword', function () {
    return view('loginforgot');
});


// Rute yang membutuhkan login
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        $dataTransaksi = Transaksi::all(); // Atau pakai orderBy jika ingin yang terbaru
        return view('dashboard', compact('dataTransaksi'));
    })->name('dashboard');

    Route::get('/dashboard/{type?}', function ($type = null) {
        return view($type ? 'dashboard-data' : 'dashboard', compact('type'));
    })->name('dashboard');

    Route::get('/dashboard/{type}/tambahdata', function ($type) {
        return view('add-data', compact('type'));
    })->name('dashboard.add-data');

    //LuarNegeri
    Route::post('/wisata-luar-negeri/store', [WisataLuarNegeriController::class, 'store'])->name('wisata.store');
    Route::get('/add-data', [WisataLuarNegeriController::class, 'index'])->name('wisata.add');

    //Domestik
    Route::post('/wisata-domestik/store', [WisataDomestikController::class, 'store'])->name('domestik.store');

    //JamaahUmrah
    Route::post('/jamaah-umrah/store', [JamaahUmrahController::class, 'store'])->name('umrah.store');

    //JamaahHaji
    Route::post('/jamaah-haji/store', [WisataLuarNegeriController::class, 'store'])->name('haji.store');




    //transaksi
    Route::get('/transaction', function () {
        return redirect()->route('transaction', 'datawl');
    });

    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
    Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
    Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');

    Route::get('/transaction/{type}', function ($type) {
        return view('transaction', compact('type'));
    })->name('transaction');

    Route::get('/transaction/{type}/tambahdata', function ($type) {
        return view('add-data', compact('type'));
    })->name('transaction.add-data');

    Route::get('/ubahdata', function () {
        return view('change-data');
    });
});

