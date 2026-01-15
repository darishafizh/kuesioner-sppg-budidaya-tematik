@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="page-header-content">
        <div>
            <h1 class="page-title">Kuesioner SPPG</h1>
            <p class="page-subtitle">Data Survei Sekolah Perikanan</p>
        </div>
        <a href="{{ route('sppg.create') }}" class="btn btn-warning">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            Tambah Kuesioner
        </a>
    </div>
</div>

<!-- Search & Filter -->
<div class="card mb-4">
    <div class="card-body">
        <form method="GET" class="flex gap-3 flex-wrap items-center">
            <div style="flex:1; min-width:200px;">
                <input type="text" name="search" value="{{ request('search') }}" 
                    placeholder="Cari nama sekolah, lokasi..."
                    class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                Cari
            </button>
        </form>
    </div>
</div>

<!-- Data Table -->
<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Sekolah</th>
                <th>Lokasi</th>
                <th>Tanggal</th>
                <th style="text-align:right;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($surveys as $index => $survey)
            <tr>
                <td class="font-medium">{{ $surveys->firstItem() + $index }}</td>
                <td>
                    <div class="font-medium">{{ $survey->nama_sekolah ?? '-' }}</div>
                </td>
                <td>
                    <div>{{ $survey->kabupaten ?? '-' }}</div>
                    <div class="text-sm text-muted">{{ $survey->provinsi ?? '-' }}</div>
                </td>
                <td class="text-muted">{{ $survey->tanggal ? $survey->tanggal->format('d/m/Y') : '-' }}</td>
                <td>
                    <div class="table-actions">
                        <a href="{{ route('sppg.show', $survey) }}" class="table-action-btn view" title="Lihat">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </a>
                        <a href="{{ route('sppg.edit', $survey) }}" class="table-action-btn edit" title="Edit">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </a>
                        <form action="{{ route('sppg.destroy', $survey) }}" method="POST" style="display:inline;" onsubmit="return confirm('Hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="table-action-btn delete" title="Hapus">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">
                    <div class="empty-state">
                        <svg class="empty-state-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <p class="empty-state-title">Belum ada data kuesioner</p>
                        <a href="{{ route('sppg.create') }}" class="empty-state-action">Tambah data pertama</a>
                    </div>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    @if($surveys->hasPages())
    <div class="pagination">
        {{ $surveys->links() }}
    </div>
    @endif
</div>
@endsection

@push('scripts')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endpush
