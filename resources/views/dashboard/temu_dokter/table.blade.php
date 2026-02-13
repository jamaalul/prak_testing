@extends('layouts.dashboard')

@section('title', 'Temu Dokter - RSHP UNAIR')

@section('content')
    <div>

        <x-data-table :table-data="App\Models\TemuDokter::select('no_urut', 'waktu_daftar', 'status', 'idpet', 'idrole_user')
            ->with('pet:idpet,nama')
            ->get()
            ->map(function ($item) {
                return [
                    'no_urut' => $item->no_urut,
                    'waktu_daftar' => $item->waktu_daftar,
                    'status' => $item->status,
                    'pet' => $item->pet->nama,
                ];
            })
            ->toArray()" />
    </div>
@endsection
