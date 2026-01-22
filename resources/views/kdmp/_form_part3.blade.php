        <!-- C2. Rekapitulasi Teknis -->
        <div class="border-t mt-5 pt-4">
            <div class="subsection-header">
                <span class="subsection-icon">C2</span>
                <span class="subsection-title">Rekapitulasi Teknis</span>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width:50px">No</th>
                            <th>Komponen</th>
                            <th style="width:150px">Progres (%)</th>
                            <th style="min-width:200px">Keterangan/Kendala</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $progresItems = [
                            ['name' => 'progres_bangunan', 'label' => 'Progres bangunan/shelter/rumah kolam'],
                            ['name' => 'progres_kolam', 'label' => 'Progres pemasangan kolam'],
                            ['name' => 'progres_listrik', 'label' => 'Progres instalasi listrik'],
                            ['name' => 'progres_air', 'label' => 'Progres instalasi saluran air'],
                            ['name' => 'progres_aerasi', 'label' => 'Progres instalasi saluran aerasi'],
                        ];
                        @endphp
                        @foreach($progresItems as $index => $item)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $item['label'] }}</td>
                            <td>
                                <div class="flex" style="align-items:center; gap:0.5rem;">
                                    <input type="number" name="{{ $item['name'] }}" min="0" max="100" class="form-control" placeholder="0">
                                    <span>%</span>
                                </div>
                            </td>
                            <td><input type="text" name="{{ $item['name'] }}_ket" class="form-control" placeholder="Keterangan/Kendala..."></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- C3. Tenaga Kerja -->
        <div class="border-t mt-5 pt-4">
            <div class="subsection-header">
                <span class="subsection-icon">C3</span>
                <span class="subsection-title">Tenaga Kerja</span>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width:50px">No</th>
                            <th>Rincian</th>
                            <th style="min-width:250px">Jawaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center" rowspan="3">1</td>
                            <td><strong>Jumlah Tenaga Kerja yang terlibat</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="ps-4">a. Laki-Laki</td>
                            <td><input type="number" name="tk_laki" min="0" class="form-control" placeholder="0 orang"></td>
                        </tr>
                        <tr>
                            <td class="ps-4">b. Perempuan</td>
                            <td><input type="number" name="tk_perempuan" min="0" class="form-control" placeholder="0 orang"></td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Upah tenaga kerja/hari (Rp)</td>
                            <td><input type="number" name="upah_harian" min="0" class="form-control" placeholder="Rp 0"></td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Lama bekerja (jumlah jam/hari, hari/minggu)</td>
                            <td>
                                <div class="grid grid-cols-2" style="gap:0.5rem;">
                                    <div class="flex" style="align-items:center; gap:0.25rem;">
                                        <input type="number" name="jam_kerja" min="0" class="form-control" placeholder="0">
                                        <span>jam/hari</span>
                                    </div>
                                    <div class="flex" style="align-items:center; gap:0.25rem;">
                                        <input type="number" name="hari_kerja" min="0" max="7" class="form-control" placeholder="0">
                                        <span>hari/minggu</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" rowspan="3">4</td>
                            <td><strong>Tenaga Kerja yang terlibat konstruksi kolam</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="ps-4">a. Jumlah tenaga kerja lokal (orang)</td>
                            <td><input type="number" name="tk_lokal" min="0" class="form-control" placeholder="0"></td>
                        </tr>
                        <tr>
                            <td class="ps-4">b. Jumlah tenaga kerja dari luar (orang)</td>
                            <td><input type="number" name="tk_luar" min="0" class="form-control" placeholder="0"></td>
                        </tr>
                        <tr>
                            <td class="text-center" rowspan="5">5</td>
                            <td><strong>Jumlah tenaga kerja yang terlibat tidak langsung</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="ps-4">a. Suplier material</td>
                            <td><input type="number" name="tk_supplier" min="0" class="form-control" placeholder="0 orang"></td>
                        </tr>
                        <tr>
                            <td class="ps-4">b. Pedagang makanan sekitar</td>
                            <td><input type="number" name="tk_pedagang" min="0" class="form-control" placeholder="0 orang"></td>
                        </tr>
                        <tr>
                            <td class="ps-4">c. Sopir</td>
                            <td><input type="number" name="tk_sopir" min="0" class="form-control" placeholder="0 orang"></td>
                        </tr>
                        <tr>
                            <td class="ps-4">d. Lainnya</td>
                            <td><input type="number" name="tk_lainnya" min="0" class="form-control" placeholder="0 orang"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Kendala Pembangunan -->
        <div class="border-t mt-4 pt-4">
            <label class="form-label font-semibold mb-3">1. Kendala dalam proses pembangunan Kolam Budidaya (boleh pilih lebih dari 1):</label>
            <div class="flex gap-3 flex-wrap">
                @foreach([
                    'a' => 'Faktor cuaca',
                    'b' => 'Ketersediaan tenaga kerja',
                    'c' => 'Ketersediaan material bahan bangunan',
                    'd' => 'Akses ke lokasi (jalan kurang memadai)',
                    'e' => 'Ketersediaan Listrik',
                    'f' => 'Ketersediaan BBM',
                    'g' => 'Ketersediaan air bersih'
                ] as $key => $kendala)
                <label class="form-check" style="background:rgba(239,68,68,0.1); border:1px solid rgba(239,68,68,0.3);">
                    <input type="checkbox" name="kendala_pembangunan[]" value="{{ $kendala }}" class="form-check-input">
                    <span class="form-check-label">{{ $key }}. {{ $kendala }}</span>
                </label>
                @endforeach
            </div>
        </div>

        <!-- SOP Operasional -->
        <div class="border-t mt-4 pt-4">
            <label class="form-label font-semibold mb-3">2. Apakah sudah disusun SOP Operasional harian Bioflok?</label>
            <div class="grid grid-cols-2">
                <div class="form-group">
                    <div class="flex gap-4">
                        <label class="form-check">
                            <input type="radio" name="sop_status" value="Sudah" class="form-check-input" onclick="document.getElementById('sop_kendala_wrapper').style.display='none'">
                            <span class="form-check-label">a. Sudah</span>
                        </label>
                        <label class="form-check">
                            <input type="radio" name="sop_status" value="Belum" class="form-check-input" onclick="document.getElementById('sop_kendala_wrapper').style.display='block'">
                            <span class="form-check-label">b. Belum</span>
                        </label>
                    </div>
                </div>
                <div class="form-group" id="sop_kendala_wrapper" style="display:none;">
                    <label class="form-label">Apabila Belum ada, apa kendalanya?</label>
                    <input type="text" name="sop_kendala" class="form-control" placeholder="Sebutkan kendala...">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bagian D: Rencana Proses Bisnis -->
<div class="section-card">
    <div class="section-header">
        <div class="section-icon success">D</div>
        <h3 class="section-title">Informasi Rencana Proses Bisnis Hasil Produksi Budi Daya</h3>
    </div>
    <div class="section-body">
        <p class="text-sm text-muted mb-4">(Pengurus KDMP)</p>

        <!-- Question 1: Pemasaran -->
        <div class="form-group">
            <label class="form-label font-semibold mb-3">1. Kemana hasil panen ikan dijual?</label>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width:50px">No</th>
                            <th>Jenis Pemasaran</th>
                            <th style="min-width:250px">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $pemasaranItems = [
                            ['name' => 'jual_pasar', 'label' => 'Langsung ke pasar/pembeli eceran'],
                            ['name' => 'jual_koperasi', 'label' => 'Koperasi'],
                            ['name' => 'jual_tengkulak', 'label' => 'Tengkulak'],
                            ['name' => 'jual_pengepul', 'label' => 'Pengepul'],
                            ['name' => 'jual_pedagang_besar', 'label' => 'Pedagang Besar (PT, CV, BUMD, BUMDES)'],
                            ['name' => 'jual_sppg', 'label' => 'SPPG'],
                            ['name' => 'jual_lainnya', 'label' => 'Lainnya (sebutkan)'],
                        ];
                        @endphp
                        @foreach($pemasaranItems as $index => $item)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $item['label'] }}</td>
                            <td><input type="text" name="{{ $item['name'] }}" class="form-control" placeholder="Keterangan..."></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Question 2 -->
        <div class="form-group">
            <label class="form-label font-semibold">2. Siapa penanggung jawab operasional harian kolam?</label>
            <div class="flex gap-3 flex-wrap mt-2">
                @foreach(['Ketua', 'Pengurus', 'Anggota', 'Tenaga khusus'] as $pj)
                <label class="form-check">
                    <input type="radio" name="pj_operasional" value="{{ $pj }}" class="form-check-input">
                    <span class="form-check-label">{{ $pj }}</span>
                </label>
                @endforeach
            </div>
        </div>

        <!-- Question 3 -->
        <div class="form-group">
            <label class="form-label font-semibold">3. Apakah sudah tersedia modal operasional awal (pakan lanjutan, listrik, obat) untuk ≥ 1 siklus?</label>
            <div class="flex gap-4 mt-2">
                <label class="form-check">
                    <input type="radio" name="modal_tersedia" value="Ya" class="form-check-input">
                    <span class="form-check-label">Ya</span>
                </label>
                <label class="form-check">
                    <input type="radio" name="modal_tersedia" value="Belum" class="form-check-input">
                    <span class="form-check-label">Belum</span>
                </label>
            </div>
        </div>

        <!-- Question 4 -->
        <div class="form-group">
            <label class="form-label font-semibold">4. Jika terjadi kegagalan panen, strategi yang disiapkan:</label>
            <div class="flex gap-3 flex-wrap mt-2">
                @foreach(['Melakukan Diversifikasi usaha', 'Dukungan koperasi', 'Pinjaman', 'Belum ada strategi'] as $strategi)
                <label class="form-check">
                    <input type="radio" name="strategi_gagal" value="{{ $strategi }}" class="form-check-input">
                    <span class="form-check-label">{{ $strategi }}</span>
                </label>
                @endforeach
            </div>
        </div>

        <!-- Question 5 -->
        <div class="form-group">
            <label class="form-label font-semibold">5. Menurut Anda apa potensi kendala dalam pemasaran hasil budidaya. Jelaskan Jawaban Anda?</label>
            <textarea name="potensi_kendala" rows="3" class="form-control" placeholder="Jelaskan potensi kendala..."></textarea>
        </div>

        <!-- Question 6 -->
        <div class="form-group">
            <label class="form-label font-semibold">6. Apa antisipasi yang Anda rencanakan. Jelaskan Jawaban Anda?</label>
            <textarea name="antisipasi" rows="3" class="form-control" placeholder="Jelaskan antisipasi..."></textarea>
        </div>
    </div>
</div>

<!-- Submit -->
<div class="form-actions">
    <a href="{{ route('kdmp.index') }}" class="btn btn-outline">Batal</a>
    <button type="submit" class="btn btn-success">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        Simpan Kuesioner
    </button>
</div>
