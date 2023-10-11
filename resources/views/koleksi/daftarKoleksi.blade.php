<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Koleksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full table-auto">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 bg-gray-200 text-left text-xl leading-4 font-medium text-gray-700 uppercase tracking-wider">
                                    Nama Koleksi</th>
                                <th
                                    class="px-6 py-3 bg-gray-200 text-left text-xl leading-4 font-medium text-gray-700 uppercase tracking-wider">
                                    Jenis Koleksi</th>
                                <th
                                    class="px-6 py-3 bg-gray-200 text-left text-xl leading-4 font-medium text-gray-700 uppercase tracking-wider">
                                    Jumlah Koleksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($collections as $collection)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{ $collection->namaKoleksi }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{ $collection->jenisKoleksi }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{ $collection->jumlahKoleksi    }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <a href="{{ route('koleksiView', $collection) }}">
                                        <button
                                            class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-blue-600">Rincian</button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
// Nama: Fauzan Ramadhana Sadikin
// Nim: 6706220054
// Kelas: D3IF 4603