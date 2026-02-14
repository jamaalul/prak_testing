<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Pemilik;
use App\Models\RasHewan;
use App\Models\JenisHewan;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        return view('dashboard.pet.table');
    }

    public function edit($id)
    {
        $pet = Pet::with(['pemilik.user', 'rasHewan.jenisHewan'])->findOrFail($id);
        $pemiliks = Pemilik::with('user')->get();
        $rasHewans = RasHewan::with('jenisHewan')->get();
        
        return view('dashboard.pet.edit', compact('pet', 'pemiliks', 'rasHewans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'warna_tanda' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Jantan,Betina',
            'idpemilik' => 'required|exists:pemilik,idpemilik',
            'idras_hewan' => 'required|exists:ras_hewan,idras_hewan',
        ]);

        $pet = Pet::findOrFail($id);
        $pet->update($request->all());

        return redirect()->route('pet.index')->with('success', 'Data hewan berhasil diperbarui.');
    }
}
