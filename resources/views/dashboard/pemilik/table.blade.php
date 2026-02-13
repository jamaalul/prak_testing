@extends('layouts.dashboard')

@section('title', 'Pemilik - RSHP UNAIR')

@section('content')
    <div>

        <x-data-table :table-data="App\Models\Pemilik::with('user:iduser,nama')
            ->get()
            ->map(function ($item) {
                return [
                    'id_pemilik' => $item->idpemilik,
                    'nama' => $item->user->nama,
                    'alamat' => $item->alamat,
                    'no_wa' => $item->no_wa,
                ];
            })
            ->toArray()" />
    </div>
@endsection
