@extends('layouts.dashboard')

@section('title', 'Rekam Medis - RSHP UNAIR')

@section('content')
    <div>

        <x-data-table :table-data="App\Models\RekamMedis::with([
            // 'dokter:iduser,nama',
            'pet:idpet,nama',
            'reservasi:idreservasi_dokter,no_urut',
        ])
            ->get()
            ->map(function ($item) {
                return [
                    'idrekam_medis' => $item->idrekam_medis,
                    'created_at' => $item->created_at,
                    'anamnesa' => $item->anamnesa,
                    'temuan_klinis' => $item->temuan_klinis,
                    'diagnosa' => $item->diagnosa,
                    'pet' => $item->pet->nama,
                    // 'dokter' => $item->dokter->nama,
                    'no_urut_reservasi' => $item->reservasi->no_urut,
                ];
            })
            ->toArray()" />
    </div>
@endsection
