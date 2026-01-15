@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="flex items-center mb-6">
        <a href="{{ route('sppg.index') }}" class="mr-4 p-2 text-slate-500 hover:text-slate-700 hover:bg-slate-100 rounded-lg transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </a>
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Tambah Kuesioner SPPG</h1>
            <p class="text-slate-500">Survey Sekolah Perikanan Percontohan</p>
        </div>
    </div>

    <form action="{{ route('sppg.store') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Data Responden -->
        <div class="card-kkp p-6">
            <h3 class="text-lg font-semibold mb-4 text-slate-800 flex items-center">
                <span class="w-8 h-8 bg-amber-100 rounded-lg flex items-center justify-center mr-3">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
            </div>
        </div>

        <!-- Data SPPG -->
        <div class="card-kkp p-6">
            <h3 class="text-lg font-semibold mb-4 text-slate-800 flex items-center">
                <span class="w-8 h-8 bg-cyan-100 rounded-lg flex items-center justify-center mr-3 text-cyan-700 font-bold text-sm">A</span>
                Data SPPG & Kebutuhan
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Nama SPPG <span class="text-red-500">*</span></label>
                    <input type="text" name="nama_sppg" required class="input-kkp">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Kabupaten <span class="text-red-500">*</span></label>
                    <input type="text" name="kabupaten" required class="input-kkp">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Jumlah Sekolah Penerima MBG</label>
                    <input type="number" name="jumlah_sekolah" min="0" class="input-kkp">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Jumlah Siswa Penerima MBG</label>
                    <input type="number" name="jumlah_siswa" min="0" class="input-kkp">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Kebutuhan Lele (Kg/bulan)</label>
                    <input type="number" name="kebutuhan_lele" min="0" step="0.01" class="input-kkp">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Kebutuhan Nila (Kg/bulan)</label>
                    <input type="number" name="kebutuhan_nila" min="0" step="0.01" class="input-kkp">
                </div>
            </div>
        </div>

        <!-- Preferensi -->
        <div class="card-kkp p-6">
            <h3 class="text-lg font-semibold mb-4 text-slate-800 flex items-center">
                <span class="w-8 h-8 bg-teal-100 rounded-lg flex items-center justify-center mr-3 text-teal-700 font-bold text-sm">B</span>
                Preferensi Ikan
            </h3>
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-3">Jenis Ikan Prioritas</label>
                    <div class="flex flex-wrap gap-3">
                        @foreach(['Lele', 'Nila', 'Patin', 'Lainnya'] as $jenis)
                        <label class="flex items-center px-4 py-2 bg-cyan-50 rounded-lg hover:bg-cyan-100 transition cursor-pointer border border-cyan-200">
                            <input type="checkbox" name="jenis_ikan_prioritas[]" value="{{ $jenis }}" class="w-4 h-4 rounded border-slate-300 text-cyan-600 focus:ring-cyan-500">
                            <span class="ml-2 text-sm text-slate-700">{{ $jenis }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-3">Standar Kualitas</label>
                    <div class="flex flex-wrap gap-3">
                        @foreach(['Segar', 'Beku', 'Olahan'] as $kualitas)
                        <label class="flex items-center px-4 py-2 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition cursor-pointer border border-emerald-200">
                            <input type="checkbox" name="standar_kualitas[]" value="{{ $kualitas }}" class="w-4 h-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                            <span class="ml-2 text-sm text-slate-700">{{ $kualitas }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Kerjasama -->
        <div class="card-kkp p-6">
            <h3 class="text-lg font-semibold mb-4 text-slate-800 flex items-center">
                <span class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3 text-blue-700 font-bold text-sm">D</span>
                Kerjasama
            </h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Minat Kerjasama dengan KDMP</label>
                    <select name="minat_kerjasama" class="input-kkp">
                        <option value="Ya, sangat berminat">Ya, sangat berminat</option>
                        <option value="Ya, berminat">Ya, berminat</option>
                        <option value="Mungkin">Mungkin/Perlu pertimbangan</option>
                        <option value="Tidak">Tidak berminat</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Alasan</label>
                    <textarea name="alasan_minat" rows="3" class="input-kkp"></textarea>
                </div>
            </div>
        </div>

        <!-- Submit -->
        <div class="flex items-center justify-end gap-4 pb-8">
            <a href="{{ route('sppg.index') }}" class="px-6 py-3 text-slate-600 hover:bg-slate-100 rounded-xl font-medium transition">
                Batal
            </a>
            <button type="submit" class="btn-kkp-warning inline-flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Simpan Kuesioner
            </button>
        </div>
    </form>
</div>
@endsection
