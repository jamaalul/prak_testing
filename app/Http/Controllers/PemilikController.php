<?php

namespace App\Http\Controllers;

use App\Models\Pemilik;
use App\Models\User;
use Illuminate\Http\Request;

class PemilikController extends Controller
{
    public function index()
    {
        return view('dashboard.pemilik.table');
    }

    public function edit($id)
    {
        $pemilik = Pemilik::with('user')->findOrFail($id);
        $users = User::all(); // If renaming/linking to another user is allowed
        
        return view('dashboard.pemilik.edit', compact('pemilik', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_wa' => 'required|string|max:20',
            'alamat' => 'required|string',
            'nama' => 'required|string|max:255', // User's name
        ]);

        $pemilik = Pemilik::findOrFail($id);
        $pemilik->update([
            'no_wa' => $request->no_wa,
            'alamat' => $request->alamat,
        ]);

        $pemilik->user->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('pemilik.index')->with('success', 'Data pemilik berhasil diperbarui.');
    }
}
