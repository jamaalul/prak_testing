@extends('layouts.dashboard')

@section('title', 'Pet - RSHP UNAIR')

@section('content')
    <div>

        <x-data-table :table-data="App\Models\Pet::with(['pemilik:idpemilik,no_wa', 'rasHewan:idras_hewan,nama_ras'])
            ->get()
            ->map(function ($item) {
                return [
                    'id_pet' => $item->idpet,
                    'nama' => $item->nama,
                    'tanggal_lahir' => $item->tanggal_lahir,
                    'jenis_kelamin' => $item->jenis_kelamin == 'J' ? 'Jantan' : 'Betina',
                    'warna_tanda' => $item->warna_tanda,
                    'ras' => $item->rasHewan->nama_ras,
                    'wa_pemilik' => $item->pemilik->no_wa,
                ];
            })
            ->toArray()"
            model="Pet" 
            id-field="idpet" />
    </div>
@endsection
