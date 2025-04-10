<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WisataDomestik;
use Illuminate\Support\Facades\Hash;

class WisataDomestikController extends Controller
{
    public function index()
    {
        $wisatadomestik = WisataDomestik::all();
        return view('wisatadomestik.index', compact('wisatadomestik'));
    }

    public function create()
    {
        // Ambil semua data peserta wisata luar negeri untuk ditampilkan sebagai "data hubungan"
        $wisatadomestik = WisataDomestik::all();
        // Kirim ke view
        return view('wisata-domestik.create', compact('wisatadomestik'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_peserta' => 'required|string|max:255',
            'nik' => 'required|string|max:20|unique:wisata_domestik,nik',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'foto_peserta' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'jenis_hubungan' => 'required|in:Keluarga,Suami-istri',

            'jenis_perjalanan' => 'required|string',
            'biaya' => 'required|string',
            'hotel' => 'required|string',
            'date_of_issued_perjalanan' => 'required|date',
            'date_of_expiry_perjalanan' => 'required|date',
            'transportasi' => 'required|string',
            'kode_khusus_perjalanan' => 'required|string',

            'catatan' => 'required|string',
            'foto_catatan' => 'required|image|mimes:jpeg,png,jpg|max:2048',

            'username' => 'required|string|max:255',
            'password' => 'required|string',
            'no_telepon' => 'required|string|max:20',
            'email' => 'required|email|max:255',

            'foto_ktp' => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        // Upload foto
        if ($request->hasFile('foto_peserta')) {
            $fotoPath = $request->file('foto_peserta')->store('uploads', 'public');
        }

        if ($request->hasFile('foto_catatan')) {
            $fotoCatatan = $request->file('foto_catatan')->store('uploads', 'public');
        }

        if ($request->hasFile('foto_ktp')) {
            $fotoKtp = $request->file('foto_ktp')->store('uploads', 'public');
        }


        WisataDomestik::create([
            'nama_peserta' => $request->nama_peserta,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto_peserta' => $fotoPath,
            'jenis_hubungan' => $request->jenis_hubungan,

            'jenis_perjalanan' => $request->jenis_perjalanan,
            'biaya' => $request->biaya,
            'hotel' => $request->hotel,
            'date_of_issued_perjalanan' => $request->date_of_issued_perjalanan,
            'date_of_expiry_perjalanan' => $request->date_of_expiry_perjalanan,
            'transportasi' => $request->transportasi,
            'kode_khusus_perjalanan' => $request->kode_khusus_perjalanan,

            'catatan' => $request->catatan,
            'foto_catatan' => $fotoCatatan,

            'username' => $request->username,
            'password' => bcrypt($request->password), // amankan password
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'foto_ktp' => $fotoKtp,

        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
}
