@extends('layouts.dashboard')

@section('title', 'Jenis Hewan - RSHP UNAIR')

@section('content')
    <div>
        <x-data-table :table-data="App\Models\JenisHewan::all()->toArray()" />
    </div>
@endsection
