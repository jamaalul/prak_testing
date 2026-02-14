@extends('layouts.dashboard')

@section('title', 'Kategori Klinis - RSHP UNAIR')

@section('content')
    <div>
        <x-data-table :table-data="App\Models\KategoriKlinis::all()->toArray()"
        model="KategoriKlinis" 
        id-field="idkategori_klinis"
        edit-route="klinis.edit" />
    </div>
@endsection
