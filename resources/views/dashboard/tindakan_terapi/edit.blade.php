@extends('layouts.dashboard')

@section('title', 'Edit Tindakan Terapi - RSHP UNAIR')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Edit Tindakan Terapi</h1>
            <p class="text-gray-600">Perbarui kode dan klasifikasi tindakan medis.</p>
        </div>
        <a href="{{ route('tindakan-terapi.index') }}" class="flex items-center text-sm text-gray-500 hover:text-gray-700 transition-colors">
            <i class="fas fa-arrow-left mr-2"></i>
            Kembali ke Daftar
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <form action="{{ route('tindakan-terapi.update', $tindakan->idkode_tindakan_terapi) }}" method="POST" class="p-6 space-y-4">
            @csrf
            @method('PUT')

            <!-- Kode -->
            <div>
                <label for="kode" class="block text-sm font-medium text-gray-700 mb-1">Kode Tindakan</label>
                <input type="text" name="kode" id="kode" 
                    value="{{ old('kode', $tindakan->kode) }}" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('kode') border-red-500 @enderror"
                    required>
                @error('kode')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Deskripsi -->
            <div>
                <label for="deskripsi_tindakan_terapi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Tindakan</label>
                <textarea name="deskripsi_tindakan_terapi" id="deskripsi_tindakan_terapi" rows="3"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('deskripsi_tindakan_terapi') border-red-500 @enderror"
                    required>{{ old('deskripsi_tindakan_terapi', $tindakan->deskripsi_tindakan_terapi) }}</textarea>
                @error('deskripsi_tindakan_terapi')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Kategori -->
            <div>
                <label for="idkategori" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                <select name="idkategori" id="idkategori" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('idkategori') border-red-500 @enderror"
                    required>
                    @foreach($kategoris as $kat)
                        <option value="{{ $kat->idkategori }}" {{ old('idkategori', $tindakan->idkategori) == $kat->idkategori ? 'selected' : '' }}>
                            {{ $kat->nama_kategori }}
                        </option>
                    @endforeach
                </select>
                @error('idkategori')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Kategori Klinis -->
            <div>
                <label for="idkategori_klinis" class="block text-sm font-medium text-gray-700 mb-1">Kategori Klinis</label>
                <select name="idkategori_klinis" id="idkategori_klinis" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('idkategori_klinis') border-red-500 @enderror"
                    required>
                    @foreach($kategoriKliniss as $klinis)
                        <option value="{{ $klinis->idkategori_klinis }}" {{ old('idkategori_klinis', $tindakan->idkategori_klinis) == $klinis->idkategori_klinis ? 'selected' : '' }}>
                            {{ $klinis->nama_kategori_klinis }}
                        </option>
                    @endforeach
                </select>
                @error('idkategori_klinis')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 flex justify-end space-x-3">
                <a href="{{ route('tindakan-terapi.index') }}" 
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
