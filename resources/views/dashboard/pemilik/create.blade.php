@extends('layouts.dashboard')

@section('title', 'Tambah Pemilik - RSHP UNAIR')

@section('content')
    <div class="mx-auto max-w-2xl">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="font-bold text-gray-800 text-2xl">Tambah Pemilik</h1>
                <p class="text-gray-600">Tambahkan data pemilik baru.</p>
            </div>
            <a href="{{ route('pemilik.index') }}"
                class="flex items-center text-gray-500 hover:text-gray-700 text-sm transition-colors">
                <i class="fa-arrow-left mr-2 fas"></i>
                Kembali ke Daftar
            </a>
        </div>

        <div class="bg-white shadow-sm border border-gray-200 rounded-xl overflow-hidden">
            <form action="{{ route('pemilik.store') }}" method="POST" class="space-y-4 p-6">
                @csrf

                <!-- Nama -->
                <div>
                    <label for="nama" class="block mb-1 font-medium text-gray-700 text-sm">Nama Pemilik</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('nama') border-red-500 @enderror"
                        required>
                    @error('nama')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block mb-1 font-medium text-gray-700 text-sm">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('email') border-red-500 @enderror"
                        required>
                    @error('email')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block mb-1 font-medium text-gray-700 text-sm">Password</label>
                    <input type="password" name="password" id="password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('password') border-red-500 @enderror"
                        required>
                    @error('password')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- No. WA -->
                <div>
                    <label for="no_wa" class="block mb-1 font-medium text-gray-700 text-sm">Nomor WhatsApp</label>
                    <input type="text" name="no_wa" id="no_wa" value="{{ old('no_wa') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('no_wa') border-red-500 @enderror"
                        required>
                    @error('no_wa')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Alamat -->
                <div>
                    <label for="alamat" class="block mb-1 font-medium text-gray-700 text-sm">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="3"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('alamat') border-red-500 @enderror"
                        required>{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end space-x-3 pt-4">
                    <a href="{{ route('pemilik.index') }}"
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
