@extends('layouts.dashboard')

@section('title', 'Edit Hewan - RSHP UNAIR')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Edit Data Hewan</h1>
            <p class="text-gray-600">Perbarui informasi hewan peliharaan dan pemiliknya.</p>
        </div>
        <a href="{{ route('pet.index') }}" class="flex items-center text-sm text-gray-500 hover:text-gray-700 transition-colors">
            <i class="fas fa-arrow-left mr-2"></i>
            Kembali ke Daftar
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <form action="{{ route('pet.update', $pet->idpet) }}" method="POST" class="p-6 space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nama Hewan -->
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Hewan</label>
                    <input type="text" name="nama" id="nama" 
                        value="{{ old('nama', $pet->nama) }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('nama') border-red-500 @enderror"
                        required>
                    @error('nama')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tanggal Lahir -->
                <div>
                    <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" 
                        value="{{ old('tanggal_lahir', $pet->tanggal_lahir) }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('tanggal_lahir') border-red-500 @enderror"
                        required>
                    @error('tanggal_lahir')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Jenis Kelamin -->
                <div>
                    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('jenis_kelamin') border-red-500 @enderror"
                        required>
                        <option value="Jantan" {{ old('jenis_kelamin', $pet->jenis_kelamin) == 'Jantan' || old('jenis_kelamin', $pet->jenis_kelamin) == 'J' ? 'selected' : '' }}>Jantan</option>
                        <option value="Betina" {{ old('jenis_kelamin', $pet->jenis_kelamin) == 'Betina' || old('jenis_kelamin', $pet->jenis_kelamin) == 'B' ? 'selected' : '' }}>Betina</option>
                    </select>
                    @error('jenis_kelamin')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Warna / Tanda -->
                <div>
                    <label for="warna_tanda" class="block text-sm font-medium text-gray-700 mb-1">Warna / Tanda Khusus</label>
                    <input type="text" name="warna_tanda" id="warna_tanda" 
                        value="{{ old('warna_tanda', $pet->warna_tanda) }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('warna_tanda') border-red-500 @enderror"
                        required>
                    @error('warna_tanda')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Pemilik -->
                <div>
                    <label for="idpemilik" class="block text-sm font-medium text-gray-700 mb-1">Pemilik</label>
                    <select name="idpemilik" id="idpemilik" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('idpemilik') border-red-500 @enderror"
                        required>
                        @foreach($pemiliks as $p)
                            <option value="{{ $p->idpemilik }}" {{ old('idpemilik', $pet->idpemilik) == $p->idpemilik ? 'selected' : '' }}>
                                {{ $p->user->nama }} ({{ $p->no_wa }})
                            </option>
                        @endforeach
                    </select>
                    @error('idpemilik')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Ras Hewan -->
                <div>
                    <label for="idras_hewan" class="block text-sm font-medium text-gray-700 mb-1">Ras / Jenis Hewan</label>
                    <select name="idras_hewan" id="idras_hewan" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('idras_hewan') border-red-500 @enderror"
                        required>
                        @foreach($rasHewans as $r)
                            <option value="{{ $r->idras_hewan }}" {{ old('idras_hewan', $pet->idras_hewan) == $r->idras_hewan ? 'selected' : '' }}>
                                {{ $r->jenisHewan->nama_jenis }} - {{ $r->nama_ras }}
                            </option>
                        @endforeach
                    </select>
                    @error('idras_hewan')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="pt-4 flex justify-end space-x-3">
                <a href="{{ route('pet.index') }}" 
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
