@extends('layouts.dashboard')

@section('title', 'Jenis Hewan - RSHP UNAIR')

@section('content')
    <div>
        <x-data-table :table-data="App\Models\JenisHewan::all()->toArray()"
        model="JenisHewan" 
        id-field="idjenis_hewan"
        edit-route="jenis-hewan.edit" />
    </div>
@endsection
