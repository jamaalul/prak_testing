<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use App\Models\Pet;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    public function index()
    {
        return view('dashboard.rekam_medis.table');
    }

    public function create()
    {
        $pets = Pet::all();
        $dokters = User::whereHas('role', function($query) {
            $query->where('nama_role', 'LIKE', '%Dokter%');
        })->get();
        
        $kodeTindakans = \App\Models\KodeTindakanTerapi::all();

        return view('dashboard.rekam_medis.create', compact('pets', 'dokters', 'kodeTindakans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'anamnesa' => 'required|string',
            'temuan_klinis' => 'required|string',
            'diagnosa' => 'required|string',
            'idpet' => 'required|exists:pet,idpet',
            'dokter_pemeriksa' => 'required|exists:user,iduser',
            'details' => 'nullable|array',
            'details.*.idkode_tindakan_terapi' => 'required|exists:kode_tindakan_terapi,idkode_tindakan_terapi',
            'details.*.detail' => 'nullable|string',
        ]);

        $rekamMedis = RekamMedis::create([
            'anamnesa' => $request->anamnesa,
            'temuan_klinis' => $request->temuan_klinis,
            'diagnosa' => $request->diagnosa,
            'idpet' => $request->idpet,
            'dokter_pemeriksa' => RoleUser::where('iduser', $request->dokter_pemeriksa)->where('idrole', 2)->value('idrole_user'),
        ]);

        if ($request->has('details')) {
            foreach ($request->details as $detail) {
                $rekamMedis->detailRekamMedis()->create([
                    'idkode_tindakan_terapi' => $detail['idkode_tindakan_terapi'],
                    'detail' => $detail['detail'] ?? '',
                ]);
            }
        }

        return redirect()->route('rekam-medis.index')->with('success', 'Rekam medis berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $rekamMedis = RekamMedis::with(['pet', 'role_user.user', 'reservasi', 'detailRekamMedis.kodeTindakanTerapi'])->findOrFail($id);
        $pets = Pet::all();
        $dokters = User::whereHas('role', function($query) {
            $query->where('nama_role', 'LIKE', '%Dokter%');
        })->get();
        
        $kodeTindakans = \App\Models\KodeTindakanTerapi::all();

        return view('dashboard.rekam_medis.edit', compact('rekamMedis', 'pets', 'dokters', 'kodeTindakans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'anamnesa' => 'required|string',
            'temuan_klinis' => 'required|string',
            'diagnosa' => 'required|string',
            'idpet' => 'required|exists:pet,idpet',
            'dokter_pemeriksa' => 'required|exists:user,iduser',
            'details' => 'nullable|array',
            'details.*.idkode_tindakan_terapi' => 'required|exists:kode_tindakan_terapi,idkode_tindakan_terapi',
            'details.*.detail' => 'nullable|string',
        ]);

        $rekamMedis = RekamMedis::findOrFail($id);
        $rekamMedis->update([
            'anamnesa' => $request->anamnesa,
            'temuan_klinis' => $request->temuan_klinis,
            'diagnosa' => $request->diagnosa,
            'idpet' => $request->idpet,
            'dokter_pemeriksa' => RoleUser::where('iduser', $request->dokter_pemeriksa)->where('idrole', 2)->value('idrole_user'),
        ]);

        // Basic approach: delete all and recreate
        $rekamMedis->detailRekamMedis()->delete();
        
        if ($request->has('details')) {
            foreach ($request->details as $detail) {
                $rekamMedis->detailRekamMedis()->create([
                    'idkode_tindakan_terapi' => $detail['idkode_tindakan_terapi'],
                    'detail' => $detail['detail'] ?? '',
                ]);
            }
        }

        return redirect()->route('rekam-medis.index')->with('success', 'Rekam medis berhasil diperbarui.');
    }
}
