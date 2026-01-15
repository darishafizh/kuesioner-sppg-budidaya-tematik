@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Detail Kuesioner Masyarakat</h1>
                <p class="text-gray-600 dark:text-gray-400">{{ $masyarakat->responden ?? 'Responden' }}</p>
            </div>
            <div class="flex gap-2">
                <a href="{{ route('masyarakat.edit', $masyarakat) }}" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg">✏️ Edit</a>
                <a href="{{ route('masyarakat.index') }}" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-lg">← Kembali</a>
            </div>
        </div>

        <!-- Score Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-blue-50 dark:bg-blue-900/20 rounded-xl p-4 text-center">
                <p class="text-sm text-blue-600 dark:text-blue-400">Skor Keamanan</p>
                <p class="text-2xl font-bold text-blue-900 dark:text-blue-100">{{ $masyarakat->safety_score ?? '-' }}/5</p>
            </div>
            <div class="bg-green-50 dark:bg-green-900/20 rounded-xl p-4 text-center">
                <p class="text-sm text-green-600 dark:text-green-400">Skor Sosial-Ekonomi</p>
                <p class="text-2xl font-bold text-green-900 dark:text-green-100">{{ $masyarakat->social_economic_score ?? '-' }}/5</p>
            </div>
            <div class="bg-purple-50 dark:bg-purple-900/20 rounded-xl p-4 text-center">
                <p class="text-sm text-purple-600 dark:text-purple-400">Skor Penerimaan</p>
                <p class="text-2xl font-bold text-purple-900 dark:text-purple-100">{{ $masyarakat->acceptance_score ?? '-' }}/5</p>
            </div>
            <div class="bg-amber-50 dark:bg-amber-900/20 rounded-xl p-4 text-center">
                <p class="text-sm text-amber-600 dark:text-amber-400">Skor Total</p>
                <p class="text-2xl font-bold text-amber-900 dark:text-amber-100">{{ $masyarakat->overall_score ?? '-' }}/5</p>
            </div>
        </div>

        <!-- Data -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mb-6">
            <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Data Responden</h3>
            <div class="grid grid-cols-2 gap-4 text-sm">
                <div><span class="text-gray-500">Verifikator:</span> {{ $masyarakat->verifikator ?? '-' }}</div>
                <div><span class="text-gray-500">Responden:</span> {{ $masyarakat->responden ?? '-' }}</div>
                <div><span class="text-gray-500">Tempat:</span> {{ $masyarakat->tempat ?? '-' }}</div>
                <div><span class="text-gray-500">Tanggal:</span> {{ $masyarakat->tanggal?->format('d/m/Y') ?? '-' }}</div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6">
            <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Tanggapan</h3>
            <div class="space-y-4 text-sm">
                <div><span class="text-gray-500">Kesesuaian:</span> {{ $masyarakat->sesuai_kebutuhan ?? '-' }}</div>
                <div><span class="text-gray-500">Perasaan:</span> {{ $masyarakat->perasaan ?? '-' }}</div>
                <div><span class="text-gray-500">Harapan:</span> {{ $masyarakat->harapan ?? '-' }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
