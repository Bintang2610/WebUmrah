<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WisataLuarNegeri;

class WisataLuarNegeriController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_peserta' => 'required|string|max:255',
            'nik' => 'required|string|max:20|unique:wisata_luar_negeri,nik',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'foto_peserta' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'no_paspor' => 'nullable|string|max:50|unique:wisata_luar_negeri,no_paspor',
            'issuing_office' => 'nullable|string|max:100',
            'date_of_issued' => 'nullable|date',
            'date_of_expiry' => 'nullable|date',
            'jenis_hubungan' => 'required|in:Keluarga,Suami-istri',
        ]);

        if ($request->hasFile('foto_peserta')) {
            $file = $request->file('foto_peserta');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public'); // Simpan di storage/public/uploads

            $foto_peserta = '/storage/' . $filePath;
        } else {
            $foto_peserta = null;
        }

        WisataLuarNegeri::create([
            'nama_peserta' => $request->nama_peserta,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto_peserta' => $foto_peserta,
            'no_paspor' => $request->no_paspor,
            'issuing_office' => $request->issuing_office,
            'date_of_issued' => $request->date_of_issued,
            'date_of_expiry' => $request->date_of_expiry,
            'jenis_hubungan' => $request->jenis_hubungan,
        ]);

        return redirect()->route('dashboard.add-data', ['type' => 'wisata-luar-negeri'])
                 ->with('success', 'Data berhasil disimpan!');
    }
}
