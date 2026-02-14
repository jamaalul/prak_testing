@extends('layouts.dashboard')

@section('title', 'Tambah Hewan - RSHP UNAIR')

@section('content')
    <div class="mx-auto max-w-xl">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="font-bold text-gray-800 text-2xl">Tambah Hewan (Pet)</h1>
                <p class="text-gray-600">Tambahkan data hewan baru.</p>
            </div>
            <a href="{{ route('pet.index') }}"
                class="flex items-center text-gray-500 hover:text-gray-700 text-sm transition-colors">
                <i class="fa-arrow-left mr-2 fas"></i>
                Kembali ke Daftar
            </a>
        </div>

        <div class="bg-white shadow-sm border border-gray-200 rounded-xl overflow-hidden">
            <form action="{{ route('pet.store') }}" method="POST" class="space-y-4 p-6">
                @csrf

                <!-- Nama -->
                <div>
                    <label for="nama" class="block mb-1 font-medium text-gray-700 text-sm">Nama Hewan</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('nama') border-red-500 @enderror"
                        required>
                    @error('nama')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tanggal Lahir -->
                <div>
                    <label for="tanggal_lahir" class="block mb-1 font-medium text-gray-700 text-sm">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('tanggal_lahir') border-red-500 @enderror"
                        required>
                    @error('tanggal_lahir')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Warna/Tanda -->
                <div>
                    <label for="warna_tanda" class="block mb-1 font-medium text-gray-700 text-sm">Warna/Tanda</label>
                    <input type="text" name="warna_tanda" id="warna_tanda" value="{{ old('warna_tanda') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('warna_tanda') border-red-500 @enderror"
                        required>
                    @error('warna_tanda')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Jenis Kelamin -->
                <div>
                    <label for="jenis_kelamin" class="block mb-1 font-medium text-gray-700 text-sm">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('jenis_kelamin') border-red-500 @enderror"
                        required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Jantan" {{ old('jenis_kelamin') == 'Jantan' ? 'selected' : '' }}>Jantan</option>
                        <option value="Betina" {{ old('jenis_kelamin') == 'Betina' ? 'selected' : '' }}>Betina</option>
                    </select>
                    @error('jenis_kelamin')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Pemilik -->
                <div>
                    <label for="idpemilik" class="block mb-1 font-medium text-gray-700 text-sm">Pemilik</label>
                    <select name="idpemilik" id="idpemilik"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('idpemilik') border-red-500 @enderror"
                        required>
                        <option value="">Pilih Pemilik</option>
                        @foreach ($pemiliks as $pemilik)
                            <option value="{{ $pemilik->idpemilik }}"
                                {{ old('idpemilik') == $pemilik->idpemilik ? 'selected' : '' }}>
                                {{ $pemilik->user->nama ?? 'Unknown' }}
                            </option>
                        @endforeach
                    </select>
                    @error('idpemilik')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Ras Hewan -->
                <div>
                    <label for="idras_hewan" class="block mb-1 font-medium text-gray-700 text-sm">Ras Hewan</label>
                    <select name="idras_hewan" id="idras_hewan"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('idras_hewan') border-red-500 @enderror"
                        required>
                        <option value="">Pilih Ras Hewan</option>
                        @foreach ($rasHewans as $rasHewan)
                            <option value="{{ $rasHewan->idras_hewan }}"
                                {{ old('idras_hewan') == $rasHewan->idras_hewan ? 'selected' : '' }}>
                                {{ $rasHewan->nama_ras }} ({{ $rasHewan->jenisHewan->nama_jenis_hewan ?? 'Unknown' }})
                            </option>
                        @endforeach
                    </select>
                    @error('idras_hewan')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end space-x-3 pt-4">
                    <a href="{{ route('pet.index') }}"
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
