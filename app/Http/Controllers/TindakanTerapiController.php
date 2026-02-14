<?php

namespace App\Http\Controllers;

use App\Models\KodeTindakanTerapi;
use App\Models\Kategori;
use App\Models\KategoriKlinis;
use Illuminate\Http\Request;

class TindakanTerapiController extends Controller
{
    public function index()
    {
        return view('dashboard.tindakan_terapi.table');
    }

    public function edit($id)
    {
        $tindakan = KodeTindakanTerapi::with(['kategori', 'kategoriKlinis'])->findOrFail($id);
        $kategoris = Kategori::all();
        $kategoriKliniss = KategoriKlinis::all();
        
        return view('dashboard.tindakan_terapi.edit', compact('tindakan', 'kategoris', 'kategoriKliniss'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|string|max:50',
            'deskripsi_tindakan_terapi' => 'required|string',
            'idkategori' => 'required|exists:kategori,idkategori',
            'idkategori_klinis' => 'required|exists:kategori_klinis,idkategori_klinis',
        ]);

        $tindakan = KodeTindakanTerapi::findOrFail($id);
        $tindakan->update($request->all());

        return redirect()->route('tindakan-terapi.index')->with('success', 'Data tindakan terapi berhasil diperbarui.');
    }
}
