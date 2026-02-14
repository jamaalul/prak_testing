<?php

namespace App\Http\Controllers;

use App\Models\Perawat;
use Illuminate\Http\Request;

class PerawatController extends Controller
{
    public function index()
    {
        return view('dashboard.perawat.table');
    }

    public function edit($id)
    {
        $perawat = Perawat::with('user')->findOrFail($id);
        return view('dashboard.perawat.edit', compact('perawat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'pendidikan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:20',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        $perawat = Perawat::findOrFail($id);
        $perawat->update([
            'pendidikan' => $request->pendidikan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        $perawat->user->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('perawat.index')->with('success', 'Data perawat berhasil diperbarui.');
    }
}
