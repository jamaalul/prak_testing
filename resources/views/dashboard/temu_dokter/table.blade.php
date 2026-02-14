@extends('layouts.dashboard')

@section('title', 'Temu Dokter - RSHP UNAIR')

@section('content')
    <div>

        <x-data-table :table-data="App\Models\TemuDokter::select(
            'idreservasi_dokter',
            'no_urut',
            'waktu_daftar',
            'status',
            'idpet',
            'idrole_user',
        )
            ->with(['pet:idpet,nama', 'roleUser.user:iduser,nama'])
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->idreservasi_dokter,
                    'no_urut' => $item->no_urut,
                    'waktu_daftar' => $item->waktu_daftar,
                    'status' => $item->status == 1 ? 'Selesai' : 'Mendatang',
                    'pet' => $item->pet->nama,
                    'dokter' => $item->roleUser->user->nama,
                ];
            })
            ->toArray()" model="TemuDokter" id-field="id" edit-route="temu-dokter.edit" />
    </div>
@endsection
