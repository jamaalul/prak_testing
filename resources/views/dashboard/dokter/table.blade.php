@extends('layouts.dashboard')

@section('title', 'Perawat - RSHP UNAIR')

@section('content')
    <div>

        <x-data-table :table-data="App\Models\Dokter::with('user:iduser,nama')
            ->get()
            ->map(function ($item) {
                return [
                    'id_dokter' => $item->id_dokter,
                    'nama' => $item->user->nama,
                    'bidang' => $item->bidang_dokter,
                    'alamat' => $item->alamat,
                    'no_hp' => $item->no_hp,
                    'jenis_kelamin' => $item->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan',
                ];
            })
            ->toArray()" model="Dokter" id-field="id_dokter" edit-route="dokter.edit"/>
    </div>
@endsection
