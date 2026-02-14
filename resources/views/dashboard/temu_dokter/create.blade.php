@extends('layouts.dashboard')

@section('title', 'Tambah Reservasi Temu Dokter - RSHP UNAIR')

@section('content')
    <div class="mx-auto max-w-2xl">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="font-bold text-gray-800 text-2xl">Tambah Reservasi Temu Dokter</h1>
                <p class="text-gray-600">Buat reservasi baru.</p>
            </div>
            <a href="{{ route('temu-dokter.index') }}"
                class="flex items-center text-gray-500 hover:text-gray-700 text-sm transition-colors">
                <i class="fa-arrow-left mr-2 fas"></i>
                Kembali ke Daftar
            </a>
        </div>

        <div class="bg-white shadow-sm border border-gray-200 rounded-xl overflow-hidden">
            <form action="{{ route('temu-dokter.store') }}" method="POST" class="space-y-6 p-6">
                @csrf

                <div class="space-y-4">
                    <!-- Dokter Pemeriksa -->
                    <div>
                        <label for="dokter_pemeriksa" class="block mb-1 font-medium text-gray-700 text-sm">Dokter
                            Pemeriksa</label>
                        <select name="dokter_pemeriksa" id="dokter_pemeriksa"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('dokter_pemeriksa') border-red-500 @enderror"
                            required>
                            <option value="">Pilih Dokter</option>
                            @foreach ($dokters as $dokter)
                                <option value="{{ $dokter->iduser }}"
                                    {{ old('dokter_pemeriksa') == $dokter->iduser ? 'selected' : '' }}>
                                    {{ $dokter->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('dokter_pemeriksa')
                            <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Hewan (Pet) -->
                    <div>
                        <label for="idpet" class="block mb-1 font-medium text-gray-700 text-sm">Hewan (Pet)</label>
                        <select name="idpet" id="idpet"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('idpet') border-red-500 @enderror"
                            required>
                            <option value="">Pilih Hewan</option>
                            @foreach ($pets as $pet)
                                <option value="{{ $pet->idpet }}" {{ old('idpet') == $pet->idpet ? 'selected' : '' }}>
                                    {{ $pet->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('idpet')
                            <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div>
                        <label for="status" class="block mb-1 font-medium text-gray-700 text-sm">Status Kunjungan</label>
                        <select name="status" id="status"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('status') border-red-500 @enderror"
                            required>
                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Mendatang</option>
                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Selesai</option>
                        </select>
                        @error('status')
                            <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-end space-x-3 pt-4">
                    <a href="{{ route('temu-dokter.index') }}"
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
