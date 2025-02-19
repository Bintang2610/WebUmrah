<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Tampilkan halaman dashboard utama dengan data
     */
    public function index()
    {
        $data = [
            'labels' => ['2020', '2021', '2022', '2023', '2024'],
            'values' => [100, 200, 300, 400, 500]
        ];
        return view('dashboard', compact('data')); // Pastikan ada file resources/views/dashboard.blade.php
    }

    /**
     * Tampilkan halaman Data JH dengan URL dashboard/datajh
     */
    public function dataJh()
    {
        return view('dashboard-jh'); // Pastikan ada file resources/views/dashboard-datajh.blade.php
    }
}