@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="flex items-center mb-6">
        <a href="{{ route('masyarakat.index') }}" class="mr-4 p-2 text-slate-500 hover:text-slate-700 hover:bg-slate-100 rounded-lg transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </a>
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Tambah Kuesioner Masyarakat</h1>
            <p class="text-slate-500">Survey persepsi masyarakat pembudidaya</p>
        </div>
    </div>

    <form action="{{ route('masyarakat.store') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Data Responden -->
        <div class="card-kkp p-6">
            <h3 class="text-lg font-semibold mb-4 text-slate-800 flex items-center">
                <span class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center mr-3">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </span>
                Data Responden
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Nama Verifikator</label>
                    <input type="text" name="verifikator" class="input-kkp">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Nama Responden</label>
                    <input type="text" name="responden" class="input-kkp">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Tempat</label>
                    <input type="text" name="tempat" class="input-kkp">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Tanggal</label>
                    <input type="date" name="tanggal" class="input-kkp">
                </div>
            </div>
        </div>

        <!-- Tanggapan -->
        <div class="card-kkp p-6">
            <h3 class="text-lg font-semibold mb-4 text-slate-800 flex items-center">
                <span class="w-8 h-8 bg-teal-100 rounded-lg flex items-center justify-center mr-3 text-teal-700 font-bold text-sm">A</span>
                Tanggapan Masyarakat
            </h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Apakah rencana pembangunan sesuai kebutuhan?</label>
                    <select name="sesuai_kebutuhan" class="input-kkp">
                        <option value="Ya, sesuai">Ya, sesuai</option>
                        <option value="Tidak sesuai">Tidak sesuai</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Perasaan terhadap pembangunan</label>
                    <select name="perasaan" class="input-kkp">
                        <option value="Senang">Senang</option>
                        <option value="Biasa saja">Biasa saja</option>
                        <option value="Tidak Senang">Tidak Senang</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Harapan masyarakat</label>
                    <textarea name="harapan" rows="3" class="input-kkp"></textarea>
                </div>
            </div>
        </div>

        <!-- Likert Scale -->
        <div class="card-kkp p-6">
            <h3 class="text-lg font-semibold mb-4 text-slate-800 flex items-center">
                <span class="w-8 h-8 bg-cyan-100 rounded-lg flex items-center justify-center mr-3 text-cyan-700 font-bold text-sm">B</span>
                Tingkat Kebahagiaan
            </h3>
            <p class="text-sm text-slate-500 mb-4 p-3 bg-slate-50 rounded-lg">
                Skala: <span class="font-medium">1</span> = Sangat Tidak Setuju, <span class="font-medium">5</span> = Sangat Setuju
            </p>
            
            @php
            $questions = [
                1 => 'Saya merasa aman dengan kegiatan pembangunan',
                2 => 'Pekerjaan fisik tidak mengganggu aktivitas',
                3 => 'Lingkungan sekitar masih nyaman',
                4 => 'Tidak khawatir terhadap dampak lingkungan',
                5 => 'Kegiatan memperhatikan keselamatan',
                6 => 'Berpotensi memberikan manfaat',
                7 => 'Membuka peluang kerja/usaha',
                8 => 'Mendorong kegiatan ekonomi lokal',
                9 => 'Tidak menimbulkan konflik sosial',
                10 => 'Berdampak positif bagi desa',
            ];
            @endphp
            
            <div class="space-y-3">
                @foreach($questions as $num => $question)
                <div class="p-4 bg-slate-50 rounded-xl hover:bg-slate-100 transition">
                    <p class="text-sm text-slate-700 mb-3 font-medium">{{ $num }}. {{ $question }}</p>
                    <div class="flex gap-4 justify-center">
                        @for($i = 1; $i <= 5; $i++)
                        <label class="flex flex-col items-center cursor-pointer group">
                            <input type="radio" name="likert_q{{ $num }}" value="{{ $i }}" class="w-5 h-5 text-cyan-600 border-slate-300 focus:ring-cyan-500">
                            <span class="text-xs mt-1 text-slate-500 group-hover:text-cyan-600">{{ $i }}</span>
                        </label>
                        @endfor
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Submit -->
        <div class="flex items-center justify-end gap-4 pb-8">
            <a href="{{ route('masyarakat.index') }}" class="px-6 py-3 text-slate-600 hover:bg-slate-100 rounded-xl font-medium transition">
                Batal
            </a>
            <button type="submit" class="btn-kkp-success inline-flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Simpan Kuesioner
            </button>
        </div>
    </form>
</div>
@endsection
