@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Detail Kuesioner SPPG</h1>
                <p class="text-gray-600 dark:text-gray-400">{{ $sppg->nama_sppg ?? 'SPPG' }}</p>
            </div>
            <div class="flex gap-2">
                <a href="{{ route('sppg.edit', $sppg) }}" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg">✏️ Edit</a>
                <a href="{{ route('sppg.index') }}" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-lg">← Kembali</a>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-blue-50 dark:bg-blue-900/20 rounded-xl p-4 text-center">
                <p class="text-sm text-blue-600 dark:text-blue-400">Jumlah Sekolah</p>
                <p class="text-2xl font-bold text-blue-900 dark:text-blue-100">{{ $sppg->jumlah_sekolah ?? 0 }}</p>
            </div>
            <div class="bg-green-50 dark:bg-green-900/20 rounded-xl p-4 text-center">
                <p class="text-sm text-green-600 dark:text-green-400">Total Kebutuhan Ikan</p>
                <p class="text-2xl font-bold text-green-900 dark:text-green-100">{{ number_format($sppg->total_kebutuhan) }} Kg</p>
            </div>
            <div class="bg-purple-50 dark:bg-purple-900/20 rounded-xl p-4 text-center">
                <p class="text-sm text-purple-600 dark:text-purple-400">Minat Kerjasama</p>
                <p class="text-lg font-bold text-purple-900 dark:text-purple-100">{{ $sppg->is_interested ? '✅ Berminat' : '- Tidak' }}</p>
            </div>
        </div>

        <!-- Data -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mb-6">
            <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Data SPPG</h3>
            <div class="grid grid-cols-2 gap-4 text-sm">
                <div><span class="text-gray-500">Nama SPPG:</span> {{ $sppg->nama_sppg ?? '-' }}</div>
                <div><span class="text-gray-500">Kabupaten:</span> {{ $sppg->kabupaten ?? '-' }}</div>
                <div><span class="text-gray-500">Jumlah Siswa:</span> {{ number_format($sppg->jumlah_siswa ?? 0) }}</div>
                <div><span class="text-gray-500">Frekuensi Menu Ikan:</span> {{ $sppg->frekuensi_menu ?? '-' }} hari/minggu</div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mb-6">
            <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Kebutuhan Ikan</h3>
            <div class="grid grid-cols-3 gap-4 text-sm">
                <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <p class="text-gray-500">Lele</p>
                    <p class="text-xl font-bold">{{ number_format($sppg->kebutuhan_lele ?? 0) }} Kg</p>
                </div>
                <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <p class="text-gray-500">Nila</p>
                    <p class="text-xl font-bold">{{ number_format($sppg->kebutuhan_nila ?? 0) }} Kg</p>
                </div>
                <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <p class="text-gray-500">Lainnya</p>
                    <p class="text-xl font-bold">{{ number_format($sppg->kebutuhan_lain ?? 0) }} Kg</p>
                </div>
            </div>
        </div>

        @if($sppg->jenis_ikan_prioritas && count($sppg->jenis_ikan_prioritas) > 0)
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6">
            <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Preferensi</h3>
            <div class="flex flex-wrap gap-2">
                @foreach($sppg->jenis_ikan_prioritas as $jenis)
                <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">{{ $jenis }}</span>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
