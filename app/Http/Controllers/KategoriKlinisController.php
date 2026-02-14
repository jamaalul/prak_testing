<?php

namespace App\Http\Controllers;

use App\Models\KategoriKlinis;
use Illuminate\Http\Request;

class KategoriKlinisController extends Controller
{
    public function index()
    {
        return view('dashboard.kategori_klinis.table');
    }

    public function create()
    {
        return view('dashboard.kategori_klinis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori_klinis' => 'required|string|max:255',
        ]);

        KategoriKlinis::create($request->all());

        return redirect()->route('klinis.index')->with('success', 'Data kategori klinis berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kategoriKlinis = KategoriKlinis::findOrFail($id);
        return view('dashboard.kategori_klinis.edit', compact('kategoriKlinis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori_klinis' => 'required|string|max:255',
        ]);

        $kategoriKlinis = KategoriKlinis::findOrFail($id);
        $kategoriKlinis->update($request->all());

        return redirect()->route('klinis.index')->with('success', 'Data kategori klinis berhasil diperbarui.');
    }
}
