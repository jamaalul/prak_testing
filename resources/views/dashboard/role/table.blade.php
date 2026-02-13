@extends('layouts.dashboard')

@section('title', 'Role - RSHP UNAIR')

@section('content')
    <div>

        <x-data-table :table-data="App\Models\Role::all()->toArray()"
        model="Role" 
        id-field="idrole" />
    </div>
@endsection
