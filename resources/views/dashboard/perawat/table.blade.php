@extends('layouts.dashboard')

@section('title', 'Perawat - RSHP UNAIR')

@section('content')
    <div>

        <x-data-table :table-data="App\Models\Perawat::with('user:iduser,nama')
            ->get()
            ->map(function ($item) {
                return [
                    'id_perawat' => $item->id_perawat,
                    'nama' => $item->user->nama,
                    'alamat' => $item->alamat,
                    'no_hp' => $item->no_hp,
                    'jenis_kelamin' => $item->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan',
                    'pendidikan' => $item->pendidikan,
                ];
            })
            ->toArray()" />
    </div>
@endsection
