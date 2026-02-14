<?php

namespace App\Http\Controllers;

use App\Models\Perawat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PerawatController extends Controller
{
    public function index()
    {
        return view('dashboard.perawat.table');
    }

    public function create()
    {
        return view('dashboard.perawat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|string|min:8',
            'pendidikan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:20',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        // Create User first
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Create Perawat
        Perawat::create([
            'pendidikan' => $request->pendidikan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'id_user' => $user->iduser,
        ]);

        return redirect()->route('perawat.index')->with('success', 'Data perawat berhasil ditambahkan.');
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
