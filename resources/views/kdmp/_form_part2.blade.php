<!-- Bagian B: Sosial Ekonomi -->
<div class="section-card">
    <div class="section-header">
        <div class="section-icon warning">B</div>
        <h3 class="section-title">Sosial Ekonomi (Desa/Kecamatan)</h3>
    </div>
    <div class="section-body">
        <!-- Verifikator untuk Bagian B -->
        <div class="border-b pb-4 mb-4">
            <label class="form-label font-semibold mb-3">Data Verifikator & Responden Bagian B</label>
            <div class="grid grid-cols-4">
                <div class="form-group">
                    <label class="form-label text-sm">Nama Verifikator</label>
                    <input type="text" name="verifikator_b" class="form-control" placeholder="Nama verifikator">
                </div>
                <div class="form-group">
                    <label class="form-label text-sm">Tempat, Tanggal, Jam</label>
                    <input type="text" name="tempat_b" class="form-control" placeholder="Tempat, tanggal, jam">
                </div>
                <div class="form-group">
                    <label class="form-label text-sm">Nama Responden</label>
                    <input type="text" name="responden_b" class="form-control" placeholder="Nama responden">
                </div>
                <div class="form-group">
                    <label class="form-label text-sm">Alamat</label>
                    <input type="text" name="alamat_b" class="form-control" placeholder="Alamat">
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:50px">No</th>
                        <th>Data Produksi</th>
                        <th style="min-width:300px">Jawaban</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Ada berapa jumlah pembudidaya ikan disini?</td>
                        <td><input type="number" name="jumlah_pembudidaya" min="0" class="form-control" placeholder="0"></td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>Jenis komoditas ikan apakah yang paling banyak dihasilkan pembudidaya setempat</td>
                        <td><input type="text" name="komoditas_terbanyak" class="form-control" placeholder="Jenis komoditas..."></td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Jumlah produksi komoditas ikan</td>
                        <td><input type="text" name="produksi_ikan" class="form-control" placeholder="Jumlah produksi..."></td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>Jumlah konsumsi ikan per desa/kecamatan/kapita (Kg)</td>
                        <td><input type="text" name="konsumsi_perkapita" class="form-control" placeholder="Konsumsi per kapita..."></td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td>Jenis ikan apa yang banyak diperdagangkan di pasar?</td>
                        <td><input type="text" name="ikan_pasar" class="form-control" placeholder="Jenis ikan..."></td>
                    </tr>
                    <tr>
                        <td class="text-center">6</td>
                        <td>Jumlah pokdakan per desa</td>
                        <td><input type="number" name="jumlah_pokdakan" min="0" class="form-control" placeholder="0"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="form-group mt-4">
            <label class="form-label font-semibold">Catatan:</label>
            <textarea name="catatan_b" rows="3" class="form-control" placeholder="Catatan..."></textarea>
        </div>
    </div>
</div>

<!-- Bagian C: Pengamatan Lapangan -->
<div class="section-card">
    <div class="section-header">
        <div class="section-icon teal">C</div>
        <h3 class="section-title">Pengamatan Lapangan (Penerima Bantuan KDMP)</h3>
    </div>
    <div class="section-body">
        <!-- Verifikator untuk Bagian C -->
        <div class="border-b pb-4 mb-4">
            <label class="form-label font-semibold mb-3">Data Verifikator & Responden Bagian C</label>
            <div class="grid grid-cols-4">
                <div class="form-group">
                    <label class="form-label text-sm">Nama Verifikator</label>
                    <input type="text" name="verifikator_c" class="form-control" placeholder="Nama verifikator">
                </div>
                <div class="form-group">
                    <label class="form-label text-sm">Nama Responden (Ketua KDMP)</label>
                    <input type="text" name="responden_c" class="form-control" placeholder="Nama Ketua KDMP">
                </div>
                <div class="form-group">
                    <label class="form-label text-sm">Alamat</label>
                    <input type="text" name="alamat_c" class="form-control" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <label class="form-label text-sm">Koordinat GPS</label>
                    <input type="text" name="koordinat_gps" class="form-control" placeholder="-6.123, 106.456">
                </div>
            </div>
        </div>

        <!-- C1. Teknis - Kriteria Lahan -->
        <div class="subsection-header">
            <span class="subsection-icon">C1</span>
            <span class="subsection-title">Teknis</span>
        </div>
        
        <div class="table-responsive mb-4">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:50px">No</th>
                        <th>Kriteria (dari Formulir 6, Lampiran Verifikasi)</th>
                        <th style="width:130px">Ya/Tidak</th>
                        <th style="min-width:200px">Keterangan/Kondisi Existing/Kendala</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $kriteriaLahan = [
                        ['name' => 'krit_lahan_datar', 'label' => 'Lahan datar/padat (sudah rata, biaya disiapkan untuk pemadatan dan perataan)'],
                        ['name' => 'krit_legalitas', 'label' => 'Legalitas lahan (sertifikat/sewa 5 tahun)'],
                        ['name' => 'krit_sumber_air', 'label' => 'Sumber air tawar mencukupi'],
                        ['name' => 'krit_listrik', 'label' => 'Sumber listrik ≥2.200 watt'],
                        ['name' => 'krit_akses', 'label' => 'Akses transportasi'],
                        ['name' => 'krit_pencemar', 'label' => 'Kedekatan dengan sumber pencemar air (Pabrik/IPAL/TPA)/risiko keamanan pangan rendah'],
                        ['name' => 'krit_prasarana', 'label' => 'Prasarana terpasang: 24 kolam Ø4m, aerasi, instalasi air/listrik'],
                        ['name' => 'krit_penyimpanan', 'label' => 'Kondisi Tempat Penyimpanan'],
                    ];
                    @endphp
                    @foreach($kriteriaLahan as $index => $krit)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $krit['label'] }}</td>
                        <td>
                            <select name="{{ $krit['name'] }}" class="form-control form-select">
                                <option value="">Pilih</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="{{ $krit['name'] }}_ket" class="form-control" placeholder="Keterangan...">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Status Instalasi -->
        <label class="form-label font-semibold mb-3">Status Instalasi</label>
        <div class="table-responsive mb-4">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:50px">No</th>
                        <th>Jenis Barang</th>
                        <th style="width:100px">Sat</th>
                        <th style="width:100px">Vol</th>
                        <th style="width:160px">Status Instalasi</th>
                        <th style="min-width:150px">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Pekerjaan pemasangan bak bulat terpal</td>
                        <td><input type="text" name="inst_bak_sat" class="form-control" placeholder="unit"></td>
                        <td><input type="number" name="inst_bak_vol" class="form-control" placeholder="0"></td>
                        <td>
                            <select name="inst_bak_status" class="form-control form-select">
                                <option value="">Pilih</option>
                                <option value="Terinstal">Terinstal</option>
                                <option value="Belum">Belum</option>
                            </select>
                        </td>
                        <td><input type="text" name="inst_bak_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>
                    
                    <!-- Pekerjaan Lantai -->
                    <tr class="bg-light"><td class="text-center" rowspan="4">2</td><td colspan="5"><strong>Pekerjaan lantai</strong></td></tr>
                    <tr>
                        <td class="ps-4">- Urugan pasir bawah lantai 5 cm</td>
                        <td><input type="text" name="inst_lantai_pasir_sat" class="form-control" placeholder="m³"></td>
                        <td><input type="number" name="inst_lantai_pasir_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_lantai_pasir_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_lantai_pasir_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>
                    <tr>
                        <td class="ps-4">- Pekerjaan lantai beton</td>
                        <td><input type="text" name="inst_lantai_beton_sat" class="form-control" placeholder="m²"></td>
                        <td><input type="number" name="inst_lantai_beton_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_lantai_beton_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_lantai_beton_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>
                    <tr>
                        <td class="ps-4">- Pekerjaan bekesting</td>
                        <td><input type="text" name="inst_lantai_bekesting_sat" class="form-control" placeholder="m"></td>
                        <td><input type="number" name="inst_lantai_bekesting_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_lantai_bekesting_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_lantai_bekesting_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>

                    <!-- Instalasi Air -->
                    <tr class="bg-light"><td class="text-center" rowspan="4">3</td><td colspan="5"><strong>Pekerjaan Instalasi Air</strong></td></tr>
                    <tr>
                        <td class="ps-4">- Pemasangan pipa utama</td>
                        <td><input type="text" name="inst_air_pipa_sat" class="form-control" placeholder="m"></td>
                        <td><input type="number" name="inst_air_pipa_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_air_pipa_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_air_pipa_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>
                    <tr>
                        <td class="ps-4">- Pemasangan sambungan pipa ke kolam</td>
                        <td><input type="text" name="inst_air_sambungan_sat" class="form-control" placeholder="unit"></td>
                        <td><input type="number" name="inst_air_sambungan_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_air_sambungan_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_air_sambungan_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>
                    <tr>
                        <td class="ps-4">- Uji penyaliran air</td>
                        <td><input type="text" name="inst_air_uji_sat" class="form-control" placeholder="ls"></td>
                        <td><input type="number" name="inst_air_uji_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_air_uji_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_air_uji_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>

                    <!-- Instalasi Listrik -->
                    <tr class="bg-light"><td class="text-center" rowspan="3">4</td><td colspan="5"><strong>Pekerjaan Instalasi Listrik</strong></td></tr>
                    <tr>
                        <td class="ps-4">- Instalasi penerangan/lampu</td>
                        <td><input type="text" name="inst_listrik_lampu_sat" class="form-control" placeholder="unit"></td>
                        <td><input type="number" name="inst_listrik_lampu_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_listrik_lampu_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_listrik_lampu_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>
                    <tr>
                        <td class="ps-4">- Instalasi terminal listrik/panel kontrol</td>
                        <td><input type="text" name="inst_listrik_panel_sat" class="form-control" placeholder="unit"></td>
                        <td><input type="number" name="inst_listrik_panel_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_listrik_panel_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_listrik_panel_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>

                    <!-- Instalasi Aerasi -->
                    <tr class="bg-light"><td class="text-center" rowspan="3">5</td><td colspan="5"><strong>Pekerjaan Instalasi Aerasi</strong></td></tr>
                    <tr>
                        <td class="ps-4">- Instalasi aerasi</td>
                        <td><input type="text" name="inst_aerasi_main_sat" class="form-control" placeholder="unit"></td>
                        <td><input type="number" name="inst_aerasi_main_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_aerasi_main_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_aerasi_main_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>
                    <tr>
                        <td class="ps-4">- Uji coba aerasi</td>
                        <td><input type="text" name="inst_aerasi_uji_sat" class="form-control" placeholder="ls"></td>
                        <td><input type="number" name="inst_aerasi_uji_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_aerasi_uji_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_aerasi_uji_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>

                    <!-- Atap Kolam -->
                    <tr class="bg-light"><td class="text-center" rowspan="4">6</td><td colspan="5"><strong>Pekerjaan Atap Kolam</strong></td></tr>
                    <tr>
                        <td class="ps-4">- Pekerjaan pemasangan tiang</td>
                        <td><input type="text" name="inst_atap_tiang_sat" class="form-control" placeholder="unit"></td>
                        <td><input type="number" name="inst_atap_tiang_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_atap_tiang_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_atap_tiang_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>
                    <tr>
                        <td class="ps-4">- Pemasangan rangka</td>
                        <td><input type="text" name="inst_atap_rangka_sat" class="form-control" placeholder="m"></td>
                        <td><input type="number" name="inst_atap_rangka_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_atap_rangka_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_atap_rangka_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>
                    <tr>
                        <td class="ps-4">- Pemasangan atap</td>
                        <td><input type="text" name="inst_atap_main_sat" class="form-control" placeholder="m²"></td>
                        <td><input type="number" name="inst_atap_main_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_atap_main_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_atap_main_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>

                    <!-- Peralatan Pendukung -->
                    <tr class="bg-light"><td class="text-center" rowspan="4">7</td><td colspan="5"><strong>Peralatan Pendukung</strong></td></tr>
                    <tr>
                        <td class="ps-4">- Ember/bak 50 liter</td>
                        <td><input type="text" name="inst_alat_ember_sat" class="form-control" placeholder="unit"></td>
                        <td><input type="number" name="inst_alat_ember_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_alat_ember_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_alat_ember_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>
                    <tr>
                        <td class="ps-4">- Pompa air jet pump</td>
                        <td><input type="text" name="inst_alat_pompa_sat" class="form-control" placeholder="unit"></td>
                        <td><input type="number" name="inst_alat_pompa_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_alat_pompa_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_alat_pompa_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>
                    <tr>
                        <td class="ps-4">- Gapura nama KDMP</td>
                        <td><input type="text" name="inst_alat_gapura_sat" class="form-control" placeholder="unit"></td>
                        <td><input type="number" name="inst_alat_gapura_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_alat_gapura_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_alat_gapura_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>

                    <!-- IPAL -->
                    <tr>
                        <td class="text-center">8</td>
                        <td>Instalasi Pengolah Air Limbah (IPAL)</td>
                        <td><input type="text" name="inst_ipal_sat" class="form-control" placeholder="unit"></td>
                        <td><input type="number" name="inst_ipal_vol" class="form-control" placeholder="0"></td>
                        <td><select name="inst_ipal_status" class="form-control form-select"><option value="">Pilih</option><option value="Terinstal">Terinstal</option><option value="Belum">Belum</option></select></td>
                        <td><input type="text" name="inst_ipal_ket" class="form-control" placeholder="Keterangan..."></td>
                    </tr>
                </tbody>
            </table>
        </div>

        @include('kdmp._form_part3')
    </div>
</div>
