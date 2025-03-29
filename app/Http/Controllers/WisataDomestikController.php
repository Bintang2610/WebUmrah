<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WisataDomestik;

class WisataDomestikController extends Controller
{
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
        ]);

        // Upload foto
        if ($request->hasFile('foto_peserta')) {
            $fotoPath = $request->file('foto_peserta')->store('uploads', 'public');
        }

        WisataDomestik::create([
            'nama_peserta' => $request->nama_peserta,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto_peserta' => $fotoPath,
            'jenis_hubungan' => $request->jenis_hubungan,
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
}
