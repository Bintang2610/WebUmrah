<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JamaahUmrahController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_peserta' => 'required|string|max:255',
            'nik' => 'required|string|max:20|unique:jamaah_umrah,nik',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'foto_peserta' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'no_paspor' => 'required|string|max:50|unique:jamaah_umrah,no_paspor',
            'issuing_office' => 'required|string|max:100',
            'date_of_issued' => 'required|date',
            'date_of_expiry' => 'required|date',
            'jenis_hubungan' => 'required|in:Keluarga,Suami-istri',
        ]);

        // Upload foto
        if ($request->hasFile('foto_peserta')) {
            $fotoPath = $request->file('foto_peserta')->store('uploads', 'public');
        }

        JamaahUmrah::create([
            'nama_peserta' => $request->nama_peserta,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto_peserta' => $fotoPath,
            'no_paspor' => $request->no_paspor,
            'issuing_office' => $request->issuing_office,
            'date_of_issued' => $request->date_of_issued,
            'date_of_expiry' => $request->date_of_expiry,
            'jenis_hubungan' => $request->jenis_hubungan,
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
}
