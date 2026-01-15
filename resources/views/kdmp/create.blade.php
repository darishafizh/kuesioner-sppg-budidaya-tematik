@extends('layouts.app')

@section('content')
<!-- Breadcrumb -->
<x-breadcrumb :items="[
    ['label' => 'KDMP', 'url' => route('kdmp.index')],
    ['label' => 'Tambah Kuesioner', 'url' => '#']
]" />

<!-- Page Header -->
<div class="page-header">
    <div class="flex items-center">
        <a href="{{ route('kdmp.index') }}" class="back-btn">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </a>
        <div>
            <h1 class="page-title">Tambah Kuesioner KDMP</h1>
            <p class="page-subtitle">Input data Koperasi Desa Merah Putih</p>
        </div>
    </div>
</div>

<form action="{{ route('kdmp.store') }}" method="POST">
    @csrf

    <!-- Data Verifikator & Responden -->
    <div class="section-card">
        <div class="section-header">
            <div class="section-icon teal">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:20px;height:20px;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <h3 class="section-title">Data Verifikator & Responden</h3>
        </div>
        <div class="section-body">
            <div class="grid grid-cols-2">
                <div class="form-group">
                    <label class="form-label">Nama Verifikator</label>
                    <input type="text" name="verifikator" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Nama Responden</label>
                    <input type="text" name="responden" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Tempat</label>
                    <input type="text" name="tempat" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control">
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian A: Identitas Lembaga -->
    <div class="section-card">
        <div class="section-header">
            <div class="section-icon navy">A</div>
            <h3 class="section-title">Identitas Lembaga & Lokasi</h3>
        </div>
        <div class="section-body">
            <div class="grid grid-cols-2">
                <div class="form-group">
                    <label class="form-label">Nama Koperasi KDMP <span class="required">*</span></label>
                    <input type="text" name="nama_koperasi" required class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Nomor Badan Hukum</label>
                    <input type="text" name="nomor_badan_hukum" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Desa/Kelurahan</label>
                    <input type="text" name="desa" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Kabupaten/Kota <span class="required">*</span></label>
                    <input type="text" name="kabupaten" required class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Provinsi <span class="required">*</span></label>
                    <select name="provinsi" required class="form-control form-select">
                        <option value="">Pilih Provinsi</option>
                        @foreach($provinces as $province)
                        <option value="{{ $province->name }}">{{ $province->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Luas Lahan (m²)</label>
                    <input type="number" name="luas_lahan" min="0" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Jumlah Paket Bantuan</label>
                    <input type="number" name="jumlah_paket" min="0" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Komoditas</label>
                    <select name="komoditas" class="form-control form-select">
                        <option value="">Pilih Komoditas</option>
                        <option value="Lele">Ikan Lele</option>
                        <option value="Nila">Ikan Nila</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Koordinat Lokasi</label>
                    <input type="text" name="koordinat" placeholder="-6.123, 106.456" class="form-control">
                </div>
            </div>

            <!-- Hambatan -->
            <div class="border-t mt-4 pt-4">
                <label class="form-label mb-3">Hambatan Utama Koperasi</label>
                <div class="flex gap-3 flex-wrap">
                    @foreach(['SDM', 'Modal', 'Kepercayaan', 'Pasar', 'Tata Kelola'] as $hambatan)
                    <label class="form-check" style="background:rgba(245,158,11,0.1); border:1px solid rgba(245,158,11,0.3);">
                        <input type="checkbox" name="hambatan_koperasi[]" value="{{ $hambatan }}" class="form-check-input">
                        <span class="form-check-label">{{ $hambatan }}</span>
                    </label>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian B: Sosial Ekonomi -->
    <div class="section-card">
        <div class="section-header">
            <div class="section-icon success">B</div>
            <h3 class="section-title">Sosial Ekonomi</h3>
        </div>
        <div class="section-body">
            <div class="grid grid-cols-2">
                <div class="form-group">
                    <label class="form-label">Jumlah Pembudidaya Ikan</label>
                    <input type="number" name="jumlah_pembudidaya" min="0" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Jumlah Pokdakan per Desa</label>
                    <input type="number" name="jumlah_pokdakan" min="0" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Produksi Ikan (Kg/bulan)</label>
                    <input type="number" name="produksi_ikan" min="0" step="0.01" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Konsumsi Ikan/Kapita (Kg)</label>
                    <input type="number" name="konsumsi_perkapita" min="0" step="0.1" class="form-control">
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian C: Pengamatan Lapangan -->
    <div class="section-card">
        <div class="section-header">
            <div class="section-icon warning">C</div>
            <h3 class="section-title">Pengamatan Lapangan - Progres</h3>
        </div>
        <div class="section-body">
            @foreach([
                ['name' => 'progres_bangunan', 'label' => 'Progres Bangunan/Shelter'],
                ['name' => 'progres_kolam', 'label' => 'Progres Pemasangan Kolam'],
                ['name' => 'progres_listrik', 'label' => 'Progres Instalasi Listrik'],
                ['name' => 'progres_air', 'label' => 'Progres Saluran Air'],
                ['name' => 'progres_aerasi', 'label' => 'Progres Saluran Aerasi'],
            ] as $progress)
            <div class="form-group p-4 bg-gray rounded-lg">
                <div class="progress-label">
                    <span>{{ $progress['label'] }}</span>
                    <strong id="{{ $progress['name'] }}_value">50%</strong>
                </div>
                <input type="range" name="{{ $progress['name'] }}" min="0" max="100" value="50" 
                    style="width:100%; accent-color:#0891B2;"
                    oninput="document.getElementById('{{ $progress['name'] }}_value').textContent = this.value + '%'">
            </div>
            @endforeach
        </div>
    </div>

    <!-- Submit -->
    <div class="form-actions">
        <a href="{{ route('kdmp.index') }}" class="btn btn-outline">Batal</a>
        <button type="submit" class="btn btn-primary">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Simpan Kuesioner
        </button>
    </div>
</form>
@endsection

@push('scripts')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endpush
