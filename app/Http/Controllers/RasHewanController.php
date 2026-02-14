<?php

namespace App\Http\Controllers;

use App\Models\RasHewan;
use App\Models\JenisHewan;
use Illuminate\Http\Request;

class RasHewanController extends Controller
{
    public function index()
    {
        return view('dashboard.ras_hewan.table');
    }

    public function create()
    {
        $jenisHewans = JenisHewan::all();
        return view('dashboard.ras_hewan.create', compact('jenisHewans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ras' => 'required|string|max:255',
            'idjenis_hewan' => 'required|exists:jenis_hewan,idjenis_hewan',
        ]);

        RasHewan::create($request->all());

        return redirect()->route('ras-hewan.index')->with('success', 'Data ras hewan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $rasHewan = RasHewan::with('jenisHewan')->findOrFail($id);
        $jenisHewans = JenisHewan::all();
        
        return view('dashboard.ras_hewan.edit', compact('rasHewan', 'jenisHewans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ras' => 'required|string|max:255',
            'idjenis_hewan' => 'required|exists:jenis_hewan,idjenis_hewan',
        ]);

        $rasHewan = RasHewan::findOrFail($id);
        $rasHewan->update($request->all());

        return redirect()->route('ras-hewan.index')->with('success', 'Data ras hewan berhasil diperbarui.');
    }
}
