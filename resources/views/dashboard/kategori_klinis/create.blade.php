@extends('layouts.dashboard')

@section('title', 'Tambah Kategori Klinis - RSHP UNAIR')

@section('content')
    <div class="mx-auto max-w-xl">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="font-bold text-gray-800 text-2xl">Tambah Kategori Klinis</h1>
                <p class="text-gray-600">Tambahkan kategori klinis baru.</p>
            </div>
            <a href="{{ route('klinis.index') }}"
                class="flex items-center text-gray-500 hover:text-gray-700 text-sm transition-colors">
                <i class="fa-arrow-left mr-2 fas"></i>
                Kembali ke Daftar
            </a>
        </div>

        <div class="bg-white shadow-sm border border-gray-200 rounded-xl overflow-hidden">
            <form action="{{ route('klinis.store') }}" method="POST" class="space-y-4 p-6">
                @csrf

                <!-- Nama Kategori Klinis -->
                <div>
                    <label for="nama_kategori_klinis" class="block mb-1 font-medium text-gray-700 text-sm">Nama Kategori
                        Klinis</label>
                    <input type="text" name="nama_kategori_klinis" id="nama_kategori_klinis"
                        value="{{ old('nama_kategori_klinis') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('nama_kategori_klinis') border-red-500 @enderror"
                        required>
                    @error('nama_kategori_klinis')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end space-x-3 pt-4">
                    <a href="{{ route('klinis.index') }}"
                        class="bg-white hover:bg-gray-50 px-4 py-2 border border-gray-300 rounded-lg font-medium text-gray-700 text-sm transition-colors">
                        Batal
                    </a>
                    <button type="submit"
                        class="bg-cyan-600 hover:bg-cyan-700 px-4 py-2 rounded-lg focus:ring-4 focus:ring-cyan-200 font-medium text-white text-sm transition-colors">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
