<?php

namespace App\Http\Controllers;

use App\Models\TemuDokter;
use App\Models\Pet;
use App\Models\User;
use App\Models\RoleUser;
use Illuminate\Http\Request;

class TemuDokterController extends Controller
{
    public function index()
    {
        return view('dashboard.temu_dokter.table');
    }

    public function create()
    {
        $pets = Pet::all();
        $dokters = User::whereHas('role', function ($query) {
            $query->where('nama_role', 'LIKE', '%Dokter%');
        })->get();
        return view('dashboard.temu_dokter.create', compact('pets', 'dokters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required|in:1,0',
            'idpet' => 'required|exists:pet,idpet',
            'dokter_pemeriksa' => 'required|exists:user,iduser',
        ]);

        // Get the last no_urut and increment
        $lastTemu = TemuDokter::orderBy('no_urut', 'desc')->first();
        $noUrut = $lastTemu ? $lastTemu->no_urut + 1 : 1;

        TemuDokter::create([
            'no_urut' => $noUrut,
            'waktu_daftar' => now(),
            'status' => $request->status,
            'idpet' => $request->idpet,
            'idrole_user' => RoleUser::where('iduser', $request->dokter_pemeriksa)
                ->whereHas('role', function ($query) {
                    $query->where('nama_role', 'LIKE', '%Dokter%');
                })
                ->value('idrole_user'),
        ]);

        return redirect()->route('temu-dokter.index')->with('success', 'Reservasi temu dokter berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $temuDokter = TemuDokter::with('pet', 'roleUser.user')->findOrFail($id);
        $pets = Pet::all();
        $dokters = User::whereHas('role', function ($query) {
            $query->where('nama_role', 'LIKE', '%Dokter%');
        })->get();
        
        return view('dashboard.temu_dokter.edit', compact('temuDokter', 'pets', 'dokters'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:1,0', // 1: Selesai, 0: Mendatang
            'idpet' => 'required|exists:pet,idpet',
            'dokter_pemeriksa' => 'required|exists:user,iduser',
        ]);

        $temuDokter = TemuDokter::findOrFail($id);
        $temuDokter->update([
            'status' => $request->status,
            'idpet' => $request->idpet,
            'idrole_user' => RoleUser::where('iduser', $request->dokter_pemeriksa)
                ->whereHas('role', function ($query) {
                    $query->where('nama_role', 'LIKE', '%Dokter%');
                })
                ->value('idrole_user'),
        ]);

        return redirect()->route('temu-dokter.index')->with('success', 'Reservasi temu dokter berhasil diperbarui.');
    }
}
