@extends('layouts.dashboard')

@section('title', 'Kategori - RSHP UNAIR')

@section('content')
    <div>
        <x-data-table :table-data="App\Models\Kategori::all()->toArray()"
        model="Kategori" 
        id-field="idkategori"/>
    </div>
@endsection
