@extends('layouts.dashboard')

@section('title', 'Tindakan Terapi - RSHP UNAIR')

@section('content')
    <div>

        <x-data-table :table-data="App\Models\KodeTindakanTerapi::with([
            'kategori:idkategori,nama_kategori',
            'kategoriKlinis:idkategori_klinis,nama_kategori_klinis',
        ])
            ->get()
            ->map(function ($item) {
                return [
                    'idkode_tindakan_terapi' => $item->idkode_tindakan_terapi,
                    'kode' => $item->kode,
                    'deskripsi_tindakan_terapi' => $item->deskripsi_tindakan_terapi,
                    'nama_kategori' => $item->kategori->nama_kategori ?? '-',
                    'nama_kategori_klinis' => $item->kategoriKlinis->nama_kategori_klinis ?? '-',
                ];
            })
            ->toArray()"
            model="KodeTindakanTerapi" 
            id-field="idkode_tindakan_terapi"
            edit-route="tindakan-terapi.edit" />
    </div>
@endsection
