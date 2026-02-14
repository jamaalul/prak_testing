@extends('layouts.dashboard')

@section('title', 'Tambah Tindakan Terapi - RSHP UNAIR')

@section('content')
    <div class="mx-auto max-w-xl">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="font-bold text-gray-800 text-2xl">Tambah Tindakan Terapi</h1>
                <p class="text-gray-600">Tambahkan tindakan terapi baru.</p>
            </div>
            <a href="{{ route('tindakan-terapi.index') }}"
                class="flex items-center text-gray-500 hover:text-gray-700 text-sm transition-colors">
                <i class="fa-arrow-left mr-2 fas"></i>
                Kembali ke Daftar
            </a>
        </div>

        <div class="bg-white shadow-sm border border-gray-200 rounded-xl overflow-hidden">
            <form action="{{ route('tindakan-terapi.store') }}" method="POST" class="space-y-4 p-6">
                @csrf

                <!-- Kode -->
                <div>
                    <label for="kode" class="block mb-1 font-medium text-gray-700 text-sm">Kode</label>
                    <input type="text" name="kode" id="kode" value="{{ old('kode') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('kode') border-red-500 @enderror"
                        required>
                    @error('kode')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Deskripsi Tindakan Terapi -->
                <div>
                    <label for="deskripsi_tindakan_terapi" class="block mb-1 font-medium text-gray-700 text-sm">Deskripsi
                        Tindakan Terapi</label>
                    <textarea name="deskripsi_tindakan_terapi" id="deskripsi_tindakan_terapi" rows="3"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('deskripsi_tindakan_terapi') border-red-500 @enderror"
                        required>{{ old('deskripsi_tindakan_terapi') }}</textarea>
                    @error('deskripsi_tindakan_terapi')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Kategori -->
                <div>
                    <label for="idkategori" class="block mb-1 font-medium text-gray-700 text-sm">Kategori</label>
                    <select name="idkategori" id="idkategori"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('idkategori') border-red-500 @enderror"
                        required>
                        <option value="">Pilih Kategori</option>
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->idkategori }}"
                                {{ old('idkategori') == $kategori->idkategori ? 'selected' : '' }}>
                                {{ $kategori->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                    @error('idkategori')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Kategori Klinis -->
                <div>
                    <label for="idkategori_klinis" class="block mb-1 font-medium text-gray-700 text-sm">Kategori
                        Klinis</label>
                    <select name="idkategori_klinis" id="idkategori_klinis"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('idkategori_klinis') border-red-500 @enderror"
                        required>
                        <option value="">Pilih Kategori Klinis</option>
                        @foreach ($kategoriKliniss as $kategoriKlinis)
                            <option value="{{ $kategoriKlinis->idkategori_klinis }}"
                                {{ old('idkategori_klinis') == $kategoriKlinis->idkategori_klinis ? 'selected' : '' }}>
                                {{ $kategoriKlinis->nama_kategori_klinis }}
                            </option>
                        @endforeach
                    </select>
                    @error('idkategori_klinis')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end space-x-3 pt-4">
                    <a href="{{ route('tindakan-terapi.index') }}"
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
