@extends('layouts.dashboard')

@section('title', 'User - RSHP UNAIR')

@section('content')
    <div>

        <x-data-table :table-data="App\Models\User::all()->toArray()"
        model="User" 
        id-field="iduser"
        edit-route="user.edit" />
    </div>
@endsection
