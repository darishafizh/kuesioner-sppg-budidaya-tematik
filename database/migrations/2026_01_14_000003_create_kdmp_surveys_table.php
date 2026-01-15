<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kdmp_surveys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            
            // Data Verifikator & Responden
            $table->string('verifikator')->nullable();
            $table->string('responden')->nullable();
            $table->string('tempat')->nullable();
            $table->date('tanggal')->nullable();
            $table->time('jam')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->integer('umur')->nullable();
            $table->enum('pendidikan', ['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3'])->nullable();
            $table->string('pekerjaan')->nullable();
            $table->text('alamat')->nullable();
            
            // Bagian A: Identitas Lembaga & Lokasi
            $table->string('nama_koperasi')->nullable();
            $table->string('nomor_badan_hukum')->nullable();
            $table->string('desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('provinsi')->nullable();
            $table->integer('luas_lahan')->nullable()->comment('dalam m2');
            $table->integer('jumlah_paket')->nullable();
            $table->enum('komoditas', ['Lele', 'Nila'])->nullable();
            $table->string('koordinat')->nullable()->comment('lat, long');
            
            // Kriteria Administrasi (8 checkboxes stored as JSON)
            $table->boolean('krit_badan_hukum_kbli')->default(false);
            $table->string('kbli_number')->nullable();
            $table->boolean('krit_ekusuka')->default(false);
            $table->boolean('krit_jkn_aktif')->default(false);
            $table->boolean('krit_proposal')->default(false);
            $table->boolean('krit_kesanggupan')->default(false);
            $table->boolean('krit_belum_bantuan')->default(false);
            $table->boolean('krit_pelatihan')->default(false);
            $table->integer('pelatihan_hari')->nullable();
            $table->boolean('krit_kelola_koperasi')->default(false);
            
            // Hambatan Koperasi (JSON array)
            $table->json('hambatan_koperasi')->nullable()->comment('SDM, Modal, Kepercayaan, Pasar, Tata Kelola');
            $table->text('catatan_a')->nullable();
            
            // Bagian B: Sosial Ekonomi
            $table->integer('jumlah_pembudidaya')->nullable();
            $table->integer('jumlah_pokdakan')->nullable();
            $table->string('komoditas_terbanyak')->nullable();
            $table->decimal('produksi_ikan', 12, 2)->nullable()->comment('Kg/bulan');
            $table->decimal('konsumsi_perkapita', 8, 2)->nullable()->comment('Kg');
            $table->string('ikan_pasar')->nullable();
            $table->text('catatan_b')->nullable();
            
            // Bagian C: Pengamatan Lapangan
            $table->string('koordinat_gps')->nullable();
            
            // Kriteria Lahan (7 checkboxes)
            $table->boolean('lahan_datar')->default(false);
            $table->boolean('lahan_legalitas')->default(false);
            $table->boolean('lahan_sumber_air')->default(false);
            $table->boolean('lahan_listrik')->default(false);
            $table->boolean('lahan_akses')->default(false);
            $table->boolean('lahan_jauh_pencemar')->default(false);
            $table->boolean('lahan_prasarana')->default(false);
            
            // Status Instalasi (8 checkboxes)
            $table->boolean('inst_bak_terpal')->default(false);
            $table->boolean('inst_lantai')->default(false);
            $table->boolean('inst_air')->default(false);
            $table->boolean('inst_listrik')->default(false);
            $table->boolean('inst_aerasi')->default(false);
            $table->boolean('inst_atap')->default(false);
            $table->boolean('inst_peralatan')->default(false);
            $table->boolean('inst_ipal')->default(false);
            
            // Progres Rekapitulasi (5 sliders 0-100%)
            $table->integer('progres_bangunan')->default(0);
            $table->integer('progres_kolam')->default(0);
            $table->integer('progres_listrik')->default(0);
            $table->integer('progres_air')->default(0);
            $table->integer('progres_aerasi')->default(0);
            
            // Tenaga Kerja
            $table->integer('tk_laki')->nullable();
            $table->integer('tk_perempuan')->nullable();
            $table->decimal('upah_harian', 12, 2)->nullable();
            $table->integer('jam_kerja')->nullable();
            $table->integer('tk_lokal')->nullable();
            $table->integer('tk_luar')->nullable();
            
            // Kendala & SOP
            $table->json('kendala_pembangunan')->nullable()->comment('Cuaca, Tenaga Kerja, Material, Akses, Listrik, BBM, Air');
            $table->enum('sop_status', ['Sudah', 'Belum'])->nullable();
            $table->string('sop_kendala')->nullable();
            
            // Bagian D: Rencana Bisnis
            $table->string('responden_pengurus')->nullable();
            $table->string('koperasi_d')->nullable();
            $table->json('tujuan_penjualan')->nullable()->comment('Pasar/Eceran, Koperasi, Tengkulak, Pengepul, Pedagang Besar, SPPG');
            $table->string('tujuan_lain')->nullable();
            $table->enum('pj_operasional', ['Ketua', 'Pengurus', 'Anggota', 'Tenaga Khusus'])->nullable();
            $table->enum('modal_tersedia', ['Ya', 'Belum'])->nullable();
            $table->enum('strategi_antisipasi', ['Diversifikasi', 'Dukungan Koperasi', 'Pinjaman', 'Belum Ada'])->nullable();
            $table->text('kendala_pemasaran')->nullable();
            $table->text('rencana_antisipasi')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kdmp_surveys');
    }
};
