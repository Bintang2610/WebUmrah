<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WisataLuarNegeriController;
use App\Http\Controllers\WisataDomestikController;
use App\Http\Controllers\JamaahUmrahController;
use App\Http\Controllers\JamaahHajiController;

use App\Models\Transaksi;
use App\Models\WisataLuarNegeri;
use App\Models\WisataDomestik;

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

Route::get('/viewuserprofil', function () {
    return view('datauserview');
});

Route::get('/viewusertrip', function () {
    return view('datausertrip');
});

Route::get('/viewusertransaction', function () {
    return view('datausertrcs');
});

Route::get('/viewtransactionwl', function () {
    return view('trcswlview');
});

Route::get('/viewtransactionwd', function () {
    return view('trcswdview');
});

Route::get('/viewtransactionju', function () {
    return view('trcsjuview');
});

Route::get('/viewtransactionjh', function () {
    return view('trcsjhview');
});

Route::get('/changetransactionwl', function () {
    return view('trcswlchange');
});

Route::get('/changetransactionwd', function () {
    return view('trcswdchange');
});

Route::get('/changetransactionju', function () {
    return view('trcsjuchange');
});

Route::get('/changetransactionjh', function () {
    return view('trcsjhchange');
});

Route::get('/viewdataarsip', function () {
    return view('dataarsip');
});

Route::get('/viewdataarsipwl', function () {
    return view('dataarsipwlview');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute Login
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//tambah
Route::get('/tambahdatajh', function () {
    return view('datajhadd');
});

Route::get('/viewuserprofil', function () {
    return view('datauserview');
});

Route::get('/tambahdataju', function () {
    return view('datajuadd');
});

Route::get('/tambahdatawl', function () {
    return view('datawladd');
});

Route::get('/tambahdatawd', function () {
    return view('datawdadd');
});

//ubah
Route::get('/ubahdatawl', function () {
    return view('datawlchange');
});

Route::get('/ubahdatawd', function () {
    return view('datawdchange');
});

Route::get('/ubahdataju', function () {
    return view('datajuchange');
});

Route::get('/ubahdatajh', function () {
    return view('datajhchange');
});

Route::get('/tambahdatatransaksi', function () {
    return view('trcsadd');
});

Route::get('/viewdatawd', function () {
    return view('datawdview');
});

Route::get('/viewdataju', function () {
    return view('datajuview');
});

Route::get('/viewdatajh', function () {
    return view('datajhview');
});

Route::get('/transaction/datawl', function () {
    return view('trcswl');
});

Route::get('/transaction/datawd', function () {
    return view('trcswd');
});

Route::get('/transaction/dataju', function () {
    return view('trcsju');
});

Route::get('/transaction/datajh', function () {
    return view('trcsjh');
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


    Route::get('/dashboard/datawl', function () {
        $dataWLN = WisataLuarNegeri::all();
        return view('datawl', compact('dataWLN'));
    });

    Route::get('/dashboard/datawd', function () {
        $dataWD = WisataDomestik::all();
        return view('datawd', compact('dataWD'));
    });

    Route::get('/dashboard/dataju', function () {
        return view('dataju');
    });

    Route::get('/dashboard/datajh', function () {
        return view('datajh');
    });


//TAMBAH
    Route::get('/tambahdatajh', function () {
        return view('datajhadd');
    });

    Route::get('/tambahdataju', function () {
        return view('datajuadd');
    });

    Route::get('/tambahdatawl', function () {
        $dataWLN = WisataLuarNegeri::all();
        return view('datawladd', compact('dataWLN'));
    });

    Route::get('/tambahdatawd', function () {
        $dataWD = WisataDomestik::all();
        return view('datawdadd', compact('dataWD'));
    });

    Route::get('/tambahdatatransaksi', function () {
        return view('trcsadd');
    });


    //VIEW
    Route::get('/viewdatawl', function () {
        $dataWLN = WisataLuarNegeri::all();
        return view('datawlview', compact('dataWLN'));
    });

    Route::get('/viewdatawd', function () {
        $dataWD = WisataDomestik::all();
        return view('datawdview', compact('dataWD'));
    });



    Route::get('/transaction/datawl', function () {
        return view('trcswl');
    });

    Route::get('/transaction/datawd', function () {
        return view('trcswd');
    });

    Route::get('/transaction/dataju', function () {
        return view('trcsju');
    });

    Route::get('/transaction/datajh', function () {
        return view('trcsjh');
    });

    Route::get('/forgotpassword', function () {
        return view('loginforgot');
    });

    //LuarNegeri
    Route::post('/wisata-luar-negeri/store', [WisataLuarNegeriController::class, 'store'])->name('wisata.store');
    Route::get('/wisata-luar-negeri', [TransaksiController::class, 'index'])->name('wisata-luar-negeri.index');
    Route::get('/wisata/create', [WisataLuarNegeri::class, 'create'])->name('wisata.create');
    Route::get('/viewdatawl/{id}', [WisataLuarNegeriController::class, 'show'])->name('datawl.view');
    Route::get('/datawl/{id}/edit', [WisataLuarNegeriController::class, 'edit'])->name('wisataluarnegeri.edit');
    Route::put('/ubahdatawl/update/{id}', [WisataLuarNegeriController::class, 'update'])->name('wisataluarnegeri.update');


    //Domestik
    // Route::resource('wisata-domestik', WisataDomestikController::class);
    Route::post('/wisata-domestik/store', [WisataDomestikController::class, 'store'])->name('wisata-domestik.store');
    Route::get('/wisatadomestik', [wisataDomestikController::class, 'index'])->name('wisatadomestik.index');
    Route::get('/wisata-domestik/create', [WisataDomestikController::class, 'create'])->name('wisata-domestik.create');
    Route::get('/viewdatawd/{id}', [WisataDomestikController::class, 'show'])->name('datawd.view');
    Route::get('/datawd/{id}/edit', [WisataDomestikController::class, 'edit'])->name('wisatadomestik.edit');
    Route::put('/ubahdatawd/update/{id}', [WisataDomestikController::class, 'update'])->name('wisatadomestik.update');

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

