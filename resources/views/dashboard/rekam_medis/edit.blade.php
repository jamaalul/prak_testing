@extends('layouts.dashboard')

@section('title', 'Edit Rekam Medis - RSHP UNAIR')

@section('content')
    <div class="mx-auto max-w-4xl">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="font-bold text-gray-800 text-2xl">Edit Rekam Medis</h1>
                <p class="text-gray-600">Perbarui catatan medis pasien.</p>
            </div>
            <a href="{{ route('rekam-medis.index') }}"
                class="flex items-center text-gray-500 hover:text-gray-700 text-sm transition-colors">
                <i class="fa-arrow-left mr-2 fas"></i>
                Kembali ke Daftar
            </a>
        </div>

        <div class="bg-white shadow-sm border border-gray-200 rounded-xl overflow-hidden">
            <form action="{{ route('rekam-medis.update', $rekamMedis->idrekam_medis) }}" method="POST" class="space-y-6 p-6">
                @csrf
                @method('PUT')

                <!-- Info Reservasi & Pet -->
                <div class="gap-4 grid grid-cols-1 md:grid-cols-2 bg-gray-50 p-4 border border-gray-100 rounded-lg">
                    <div>
                        <label class="block font-semibold text-gray-500 text-xs uppercase">No. Reservasi</label>
                        <p class="font-medium text-gray-900">#{{ $rekamMedis->reservasi->no_urut }}</p>
                    </div>
                    <div>
                        <label class="block font-semibold text-gray-500 text-xs uppercase">Tanggal Rekam</label>
                        <p class="font-medium text-gray-900">{{ $rekamMedis->created_at }}</p>
                    </div>
                </div>

                <div class="gap-6 grid grid-cols-1 md:grid-cols-2">
                    <!-- Hewan (Pet) -->
                    <div>
                        <label for="idpet" class="block mb-1 font-medium text-gray-700 text-sm">Pasien (Pet)</label>
                        <select name="idpet" id="idpet"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('idpet') border-red-500 @enderror"
                            required>
                            @foreach ($pets as $pet)
                                <option value="{{ $pet->idpet }}"
                                    {{ old('idpet', $rekamMedis->idpet) == $pet->idpet ? 'selected' : '' }}>
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
                            @foreach ($dokters as $dokter)
                                <option value="{{ $dokter->iduser }}"
                                    {{ old('dokter_pemeriksa', $rekamMedis->dokter_pemeriksa) == $dokter->iduser ? 'selected' : '' }}>
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
                        required>{{ old('anamnesa', $rekamMedis->anamnesa) }}</textarea>
                    @error('anamnesa')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Temuan Klinis -->
                <div>
                    <label for="temuan_klinis" class="block mb-1 font-medium text-gray-700 text-sm">Temuan Klinis</label>
                    <textarea name="temuan_klinis" id="temuan_klinis" rows="3"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('temuan_klinis') border-red-500 @enderror"
                        required>{{ old('temuan_klinis', $rekamMedis->temuan_klinis) }}</textarea>
                    @error('temuan_klinis')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Diagnosa -->
                <div class="pb-6">
                    <label for="diagnosa" class="block mb-1 font-medium text-gray-700 text-sm">Diagnosa</label>
                    <textarea name="diagnosa" id="diagnosa" rows="3"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all outline-none @error('diagnosa') border-red-500 @enderror"
                        required>{{ old('diagnosa', $rekamMedis->diagnosa) }}</textarea>
                    @error('diagnosa')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tindakan & Terapi (Dynamic) -->
                <div class="pt-6 border-gray-100 border-t">
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <h2 class="font-semibold text-gray-800 text-sm uppercase tracking-wider">Tindakan & Terapi</h2>
                            <p class="text-gray-500 text-xs">Tambahkan detail tindakan atau terapi yang diberikan.</p>
                        </div>
                        <button type="button" id="add-detail"
                            class="inline-flex items-center bg-cyan-50 hover:bg-cyan-100 px-3 py-1.5 border border-cyan-100 rounded-lg font-medium text-cyan-600 text-xs transition-colors">
                            <i class="mr-1.5 fas fa-plus"></i>
                            Tambah Baris
                        </button>
                    </div>

                    <div id="details-container" class="space-y-4">
                        @forelse($rekamMedis->detailRekamMedis as $index => $detail)
                            <div
                                class="group relative gap-4 grid grid-cols-1 md:grid-cols-12 bg-gray-50 p-4 border border-gray-200 rounded-xl detail-row">
                                <div class="md:col-span-4">
                                    <label class="block mb-1 font-medium text-gray-500 text-xs">Kode Tindakan</label>
                                    <select name="details[{{ $index }}][idkode_tindakan_terapi]"
                                        class="px-3 py-2 border border-gray-300 rounded-lg outline-none focus:ring-2 focus:ring-cyan-500 w-full text-sm"
                                        required>
                                        <option value="">Pilih Tindakan</option>
                                        @foreach ($kodeTindakans as $kode)
                                            <option value="{{ $kode->idkode_tindakan_terapi }}"
                                                {{ $detail->idkode_tindakan_terapi == $kode->idkode_tindakan_terapi ? 'selected' : '' }}>
                                                {{ $kode->kode }} - {{ $kode->deskripsi_tindakan_terapi }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="md:col-span-7">
                                    <label class="block mb-1 font-medium text-gray-500 text-xs">Detail / Keterangan</label>
                                    <input type="text" name="details[{{ $index }}][detail]"
                                        value="{{ $detail->detail }}"
                                        class="px-3 py-2 border border-gray-300 rounded-lg outline-none focus:ring-2 focus:ring-cyan-500 w-full text-sm"
                                        placeholder="Contoh: Dosis, durasi, atau catatan tambahan...">
                                </div>
                                <div class="flex justify-center items-end md:col-span-1 pb-1">
                                    <button type="button"
                                        class="text-gray-400 hover:text-red-500 transition-colors remove-row tooltip"
                                        title="Hapus Baris">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                        @empty
                            <div id="empty-details"
                                class="bg-gray-50 py-8 border border-gray-300 border-dashed rounded-xl text-center">
                                <p class="text-gray-500 text-sm">Belum ada tindakan yang ditambahkan.</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <div class="flex justify-end space-x-3 pt-4">
                    <a href="{{ route('rekam-medis.index') }}"
                        class="bg-white hover:bg-gray-50 px-4 py-2 border border-gray-300 rounded-lg font-medium text-gray-700 text-sm transition-colors">
                        Batal
                    </a>
                    <button type="submit"
                        class="bg-cyan-600 hover:bg-cyan-700 px-4 py-2 rounded-lg focus:ring-4 focus:ring-cyan-200 font-medium text-white text-sm transition-colors">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const container = document.getElementById('details-container');
                const addButton = document.getElementById('add-detail');
                const emptyState = document.getElementById('empty-details');
                let rowIndex = {{ count($rekamMedis->detailRekamMedis) }};

                const kodeOptions = `@foreach ($kodeTindakans as $kode)
            <option value="{{ $kode->idkode_tindakan_terapi }}">{{ $kode->kode }} - {{ $kode->deskripsi_tindakan_terapi }}</option>
        @endforeach`;

                addButton.addEventListener('click', function() {
                    if (emptyState) emptyState.style.display = 'none';

                    const row = document.createElement('div');
                    row.className =
                        'detail-row group grid grid-cols-1 md:grid-cols-12 gap-4 p-4 bg-gray-50 rounded-xl border border-gray-200 relative animate-fade-in';
                    row.innerHTML = `
                <div class="md:col-span-4">
                    <label class="block mb-1 font-medium text-gray-500 text-xs">Kode Tindakan</label>
                    <select name="details[${rowIndex}][idkode_tindakan_terapi]" 
                        class="px-3 py-2 border border-gray-300 rounded-lg outline-none focus:ring-2 focus:ring-cyan-500 w-full text-sm" required>
                        <option value="">Pilih Tindakan</option>
                        ${kodeOptions}
                    </select>
                </div>
                <div class="md:col-span-7">
                    <label class="block mb-1 font-medium text-gray-500 text-xs">Detail / Keterangan</label>
                    <input type="text" name="details[${rowIndex}][detail]" 
                        class="px-3 py-2 border border-gray-300 rounded-lg outline-none focus:ring-2 focus:ring-cyan-500 w-full text-sm" 
                        placeholder="Contoh: Dosis, durasi, atau catatan tambahan...">
                </div>
                <div class="flex justify-center items-end md:col-span-1 pb-1">
                    <button type="button" class="text-gray-400 hover:text-red-500 transition-colors remove-row">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            `;
                    container.appendChild(row);
                    rowIndex++;
                });

                container.addEventListener('click', function(e) {
                    if (e.target.closest('.remove-row')) {
                        const row = e.target.closest('.detail-row');
                        row.remove();

                        if (container.querySelectorAll('.detail-row').length === 0 && emptyState) {
                            emptyState.style.display = 'block';
                        }
                    }
                });
            });
        </script>

        <style>
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(5px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-fade-in {
                animation: fadeIn 0.3s ease-out forwards;
            }
        </style>
    @endpush
@endsection
