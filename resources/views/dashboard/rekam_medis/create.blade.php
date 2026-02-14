@extends('layouts.dashboard')

@section('title', 'Tambah Rekam Medis - RSHP UNAIR')

@section('content')
    <div class="mx-auto max-w-4xl">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="font-bold text-gray-800 text-2xl">Tambah Rekam Medis</h1>
                <p class="text-gray-600">Buat rekam medis baru.</p>
            </div>
            <a href="{{ route('rekam-medis.index') }}"
                class="flex items-center text-gray-500 hover:text-gray-700 text-sm transition-colors">
                <i class="fa-arrow-left mr-2 fas"></i>
                Kembali ke Daftar
            </a>
        </div>

        <div class="bg-white shadow-sm border border-gray-200 rounded-xl overflow-hidden">
            <form action="{{ route('rekam-medis.store') }}" method="POST" class="space-y-6 p-6">
                @csrf

                <div class="gap-6 grid grid-cols-1 md:grid-cols-2">
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
                </div>

                <!-- Anamnesa -->
                <div>
                    <label for="anamnesa" class="block mb-1 font-medium text-gray-700 text-sm">Anamnesa</label>
                    <textarea name="anamnesa" id="anamnesa" rows="3"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('anamnesa') border-red-500 @enderror"
                        required>{{ old('anamnesa') }}</textarea>
                    @error('anamnesa')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Temuan Klinis -->
                <div>
                    <label for="temuan_klinis" class="block mb-1 font-medium text-gray-700 text-sm">Temuan Klinis</label>
                    <textarea name="temuan_klinis" id="temuan_klinis" rows="3"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('temuan_klinis') border-red-500 @enderror"
                        required>{{ old('temuan_klinis') }}</textarea>
                    @error('temuan_klinis')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Diagnosa -->
                <div>
                    <label for="diagnosa" class="block mb-1 font-medium text-gray-700 text-sm">Diagnosa</label>
                    <textarea name="diagnosa" id="diagnosa" rows="3"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('diagnosa') border-red-500 @enderror"
                        required>{{ old('diagnosa') }}</textarea>
                    @error('diagnosa')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Detail Tindakan Terapi -->
                <div>
                    <label class="block mb-2 font-medium text-gray-700 text-sm">Detail Tindakan Terapi</label>
                    <div id="details-container" class="space-y-3">
                        <div class="gap-4 grid grid-cols-1 md:grid-cols-2 bg-gray-50 p-4 rounded-lg detail-row">
                            <div>
                                <label class="block mb-1 font-medium text-gray-600 text-xs">Tindakan Terapi</label>
                                <select name="details[0][idkode_tindakan_terapi]"
                                    class="px-3 py-2 border border-gray-300 focus:border-cyan-500 rounded-lg outline-none focus:ring-2 focus:ring-cyan-500 w-full text-sm transition-all">
                                    <option value="">Pilih Tindakan</option>
                                    @foreach ($kodeTindakans as $kodeTindakan)
                                        <option value="{{ $kodeTindakan->idkode_tindakan_terapi }}">
                                            {{ $kodeTindakan->kode }} - {{ $kodeTindakan->deskripsi_tindakan_terapi }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="block mb-1 font-medium text-gray-600 text-xs">Detail</label>
                                <input type="text" name="details[0][detail]"
                                    class="px-3 py-2 border border-gray-300 focus:border-cyan-500 rounded-lg outline-none focus:ring-2 focus:ring-cyan-500 w-full text-sm transition-all"
                                    placeholder="Detail tindakan">
                            </div>
                        </div>
                    </div>
                    <button type="button" onclick="addDetailRow()"
                        class="bg-cyan-50 hover:bg-cyan-100 mt-3 px-4 py-2 rounded-lg font-medium text-cyan-600 text-sm transition-colors">
                        <i class="mr-2 fas fa-plus"></i>Tambah Tindakan
                    </button>
                </div>

                <div class="flex justify-end space-x-3 pt-4">
                    <a href="{{ route('rekam-medis.index') }}"
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

    <script>
        let detailIndex = 1;

        function addDetailRow() {
            const container = document.getElementById('details-container');
            const kodeTindakans = @json($kodeTindakans);

            let optionsHtml = '<option value="">Pilih Tindakan</option>';
            kodeTindakans.forEach(function(item) {
                optionsHtml +=
                    `<option value="${item.idkode_tindakan_terapi}">${item.kode} - ${item.deskripsi_tindakan_terapi}</option>`;
            });

            const newRow = document.createElement('div');
            newRow.className = 'detail-row grid grid-cols-1 md:grid-cols-2 gap-4 p-4 bg-gray-50 rounded-lg';
            newRow.innerHTML = `
        <div>
            <label class="block mb-1 font-medium text-gray-600 text-xs">Tindakan Terapi</label>
            <select name="details[${detailIndex}][idkode_tindakan_terapi]"
                class="px-3 py-2 border border-gray-300 focus:border-cyan-500 rounded-lg outline-none focus:ring-2 focus:ring-cyan-500 w-full text-sm transition-all">
                ${optionsHtml}
            </select>
        </div>
        <div class="flex gap-2">
            <div class="flex-1">
                <label class="block mb-1 font-medium text-gray-600 text-xs">Detail</label>
                <input type="text" name="details[${detailIndex}][detail]"
                    class="px-3 py-2 border border-gray-300 focus:border-cyan-500 rounded-lg outline-none focus:ring-2 focus:ring-cyan-500 w-full text-sm transition-all"
                    placeholder="Detail tindakan">
            </div>
            <button type="button" onclick="this.closest('.detail-row').remove()"
                class="self-end hover:bg-red-50 px-3 py-2 rounded-lg text-red-600 transition-colors">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    `;

            container.appendChild(newRow);
            detailIndex++;
        }
    </script>
@endsection
