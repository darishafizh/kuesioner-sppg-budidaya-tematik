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
        Schema::create('sppg_surveys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            
            // Data Verifikator & Responden
            $table->string('verifikator')->nullable();
            $table->string('responden')->nullable();
            $table->string('tempat')->nullable();
            $table->date('tanggal')->nullable();
            $table->time('jam')->nullable();
            $table->string('koordinat')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->integer('umur')->nullable();
            $table->enum('pendidikan', ['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3'])->nullable();
            $table->string('pekerjaan')->nullable();
            $table->text('alamat')->nullable();
            
            // Bagian A: Data SPPG & Kebutuhan
            $table->string('nama_sppg')->nullable();
            $table->string('kabupaten')->nullable();
            $table->integer('jumlah_sekolah')->nullable();
            $table->integer('jumlah_siswa')->nullable();
            $table->integer('porsi_harian')->nullable();
            $table->integer('porsi_bulanan')->nullable();
            $table->decimal('kebutuhan_lele', 12, 2)->nullable()->comment('Kg/bulan');
            $table->decimal('kebutuhan_nila', 12, 2)->nullable()->comment('Kg/bulan');
            $table->decimal('kebutuhan_lain', 12, 2)->nullable()->comment('Kg/bulan');
            $table->integer('frekuensi_menu')->nullable()->comment('Hari per minggu');
            $table->decimal('anggaran_porsi', 15, 2)->nullable()->comment('Rp');
            $table->enum('status_terpenuhi', ['Ya', 'Belum'])->nullable();
            $table->decimal('kekurangan', 12, 2)->nullable()->comment('Kg');
            
            // Bagian B: Preferensi Ikan
            $table->json('jenis_ikan_prioritas')->nullable()->comment('Lele, Nila, Patin, Lainnya');
            $table->string('jenis_ikan_lain')->nullable();
            $table->json('ukuran_kondisi')->nullable()->comment('Fillet, Utuh, Ukuran cm, Ukuran kg');
            $table->string('ukuran_detail')->nullable();
            $table->json('standar_kualitas')->nullable()->comment('Segar, Beku, Olahan');
            $table->json('sertifikasi')->nullable()->comment('Bebas Formalin, Terdaftar KKP, Halal, BPOM');
            $table->json('sumber_prioritas')->nullable()->comment('Lokal KDMP, Tambak MBG, Pasar, Supplier');
            
            // Bagian C: Rekapitulasi (5 items dengan kepentingan & harga)
            $table->tinyInteger('penting_jenis')->nullable()->comment('1-5');
            $table->decimal('harga_jenis', 15, 2)->nullable()->comment('Rp/kg');
            $table->tinyInteger('penting_ukuran')->nullable()->comment('1-5');
            $table->decimal('harga_ukuran', 15, 2)->nullable()->comment('Rp/kg');
            $table->tinyInteger('penting_kualitas')->nullable()->comment('1-5');
            $table->decimal('harga_kualitas', 15, 2)->nullable()->comment('Rp/kg');
            $table->tinyInteger('penting_sertifikasi')->nullable()->comment('1-5');
            $table->decimal('harga_sertifikasi', 15, 2)->nullable()->comment('Rp/kg');
            $table->tinyInteger('penting_sumber')->nullable()->comment('1-5');
            $table->decimal('harga_sumber', 15, 2)->nullable()->comment('Rp/kg');
            
            // Bagian D: Kendala & Kerjasama
            $table->json('kendala_pasokan')->nullable()->comment('Ketersediaan, Harga, Kualitas, Logistik, Supplier, Sertifikasi');
            $table->text('kendala_lain')->nullable();
            $table->enum('minat_kerjasama', ['Ya, sangat berminat', 'Ya, berminat', 'Mungkin', 'Tidak'])->nullable();
            $table->text('alasan_minat')->nullable();
            $table->decimal('volume_kebutuhan', 12, 2)->nullable()->comment('Kg/bulan');
            $table->string('jenis_ikan_dibutuhkan')->nullable();
            $table->enum('kontrak_status', ['Ada', 'Tidak Ada', 'Dalam Proses'])->nullable();
            $table->text('target_kontrak')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sppg_surveys');
    }
};
