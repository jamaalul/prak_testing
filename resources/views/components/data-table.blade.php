@props(['tableData' => []])

<div class="bg-white shadow-sm border border-gray-200 rounded-xl overflow-hidden">
    @if (empty($tableData) || count($tableData) === 0)
        <div class="p-12 text-center">
            <div class="inline-flex justify-center items-center bg-gray-50 mb-4 rounded-full w-16 h-16">
                <i class="text-gray-400 text-2xl fas fa-folder-open"></i>
            </div>
            <h3 class="font-medium text-gray-900 text-lg">Tidak ada data</h3>
            <p class="mt-1 text-gray-500">Belum ada data yang tersedia untuk ditampilkan saat ini.</p>
        </div>
    @else
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left table-auto">
                <thead>
                    <tr class="bg-gray-50 border-gray-200 border-b">
                        @foreach (array_keys((array) $tableData[0]) as $header)
                            <th class="px-6 py-4 font-semibold text-gray-600 text-xs uppercase tracking-wider">
                                {{ str_replace('_', ' ', $header) }}
                            </th>
                        @endforeach
                        <th class="px-6 py-4 font-semibold text-gray-600 text-xs text-right uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($tableData as $row)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            @foreach ((array) $row as $cell)
                                <td class="px-6 py-4 text-gray-700 whitespace-nowrap">
                                    {{ $cell }}
                                </td>
                            @endforeach
                            <td class="px-6 py-4 text-right whitespace-nowrap">
                                <div class="flex justify-end space-x-2">
                                    <button class="p-1 text-cyan-600 hover:text-cyan-900">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="p-1 text-red-600 hover:text-red-900">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
