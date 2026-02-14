@extends('layouts.dashboard')

@section('title', 'Edit Pemilik - RSHP UNAIR')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Edit Data Pemilik</h1>
            <p class="text-gray-600">Perbarui informasi pemilik hewan.</p>
        </div>
        <a href="{{ route('pemilik.index') }}" class="flex items-center text-sm text-gray-500 hover:text-gray-700 transition-colors">
            <i class="fas fa-arrow-left mr-2"></i>
            Kembali ke Daftar
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <form action="{{ route('pemilik.update', $pemilik->idpemilik) }}" method="POST" class="p-6 space-y-4">
            @csrf
            @method('PUT')

            <!-- Nama (dari tabel User) -->
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Pemilik</label>
                <input type="text" name="nama" id="nama" 
                    value="{{ old('nama', $pemilik->user->nama) }}" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('nama') border-red-500 @enderror"
                    required>
                @error('nama')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- No. WA -->
            <div>
                <label for="no_wa" class="block text-sm font-medium text-gray-700 mb-1">Nomor WhatsApp</label>
                <input type="text" name="no_wa" id="no_wa" 
                    value="{{ old('no_wa', $pemilik->no_wa) }}" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('no_wa') border-red-500 @enderror"
                    required>
                @error('no_wa')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Alamat -->
            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('alamat') border-red-500 @enderror"
                    required>{{ old('alamat', $pemilik->alamat) }}</textarea>
                @error('alamat')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 flex justify-end space-x-3">
                <a href="{{ route('pemilik.index') }}" 
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
