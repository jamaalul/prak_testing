<?php

namespace App\Http\Controllers;

use App\Models\JenisHewan;
use Illuminate\Http\Request;

class JenisHewanController extends Controller
{
    public function index()
    {
        return view('dashboard.jenis_hewan.table');
    }

    public function edit($id)
    {
        $jenisHewan = JenisHewan::findOrFail($id);
        return view('dashboard.jenis_hewan.edit', compact('jenisHewan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jenis_hewan' => 'required|string|max:255',
        ]);

        $jenisHewan = JenisHewan::findOrFail($id);
        $jenisHewan->update($request->all());

        return redirect()->route('jenis-hewan.index')->with('success', 'Data jenis hewan berhasil diperbarui.');
    }
}
