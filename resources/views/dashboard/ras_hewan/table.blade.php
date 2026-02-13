@extends('layouts.dashboard')

@section('title', 'Ras Hewan - RSHP UNAIR')

@section('content')
    <div>
        <x-data-table :table-data="App\Models\RasHewan::select('idras_hewan', 'nama_ras', 'idjenis_hewan')
            ->with('jenisHewan:idjenis_hewan,nama_jenis_hewan')
            ->get()
            ->map(function ($item) {
                return [
                    'idras_hewan' => $item->idras_hewan,
                    'nama_ras' => $item->nama_ras,
                    'nama_jenis_hewan' => $item->jenisHewan->nama_jenis_hewan ?? '-',
                ];
            })
            ->toArray()"
            model="RasHewan" 
            id-field="idras_hewan" />
    </div>
@endsection
