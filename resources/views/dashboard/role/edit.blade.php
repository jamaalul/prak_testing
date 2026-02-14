@extends('layouts.dashboard')

@section('title', 'Edit Role - RSHP UNAIR')

@section('content')
<div class="max-w-xl mx-auto">
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Edit Data Role</h1>
            <p class="text-gray-600">Perbarui nama level hak akses.</p>
        </div>
        <a href="{{ route('role.index') }}" class="flex items-center text-sm text-gray-500 hover:text-gray-700 transition-colors">
            <i class="fas fa-arrow-left mr-2"></i>
            Kembali ke Daftar
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <form action="{{ route('role.update', $role->idrole) }}" method="POST" class="p-6 space-y-4">
            @csrf
            @method('PUT')

            <!-- Nama Role -->
            <div>
                <label for="nama_role" class="block text-sm font-medium text-gray-700 mb-1">Nama Role</label>
                <input type="text" name="nama_role" id="nama_role" 
                    value="{{ old('nama_role', $role->nama_role) }}" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('nama_role') border-red-500 @enderror"
                    required>
                @error('nama_role')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 flex justify-end space-x-3">
                <a href="{{ route('role.index') }}" 
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                    Batal
                </a>
                <button type="submit" 
                    class="px-4 py-2 text-sm font-medium text-white bg-cyan-600 rounded-lg hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 transition-colors">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
