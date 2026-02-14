<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        return view('dashboard.dokter.table');
    }

    public function edit($id)
    {
        $dokter = Dokter::with('user')->findOrFail($id);
        return view('dashboard.dokter.edit', compact('dokter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'bidang_dokter' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:20',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        $dokter = Dokter::findOrFail($id);
        $dokter->update([
            'bidang_dokter' => $request->bidang_dokter,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        $dokter->user->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil diperbarui.');
    }
}
