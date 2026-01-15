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
        Schema::create('masyarakat_surveys', function (Blueprint $table) {
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
            
            // Bagian A: Tanggapan Masyarakat
            $table->enum('sesuai_kebutuhan', ['Ya, sesuai', 'Tidak sesuai'])->nullable();
            $table->text('item_tidak_sesuai')->nullable();
            $table->enum('perasaan', ['Senang', 'Biasa saja', 'Tidak Senang'])->nullable();
            $table->text('alasan')->nullable();
            $table->text('harapan')->nullable();
            $table->text('saran')->nullable();
            
            // Bagian B: Tingkat Kebahagiaan (15 pertanyaan likert 1-5)
            // Rasa Aman & Kenyamanan (1-5)
            $table->tinyInteger('likert_q1')->nullable()->comment('Merasa aman dengan kegiatan');
            $table->tinyInteger('likert_q2')->nullable()->comment('Tidak mengganggu aktivitas');
            $table->tinyInteger('likert_q3')->nullable()->comment('Lingkungan nyaman');
            $table->tinyInteger('likert_q4')->nullable()->comment('Tidak khawatir dampak');
            $table->tinyInteger('likert_q5')->nullable()->comment('Keselamatan diperhatikan');
            // Persepsi Dampak Sosial & Ekonomi (6-10)
            $table->tinyInteger('likert_q6')->nullable()->comment('Berpotensi manfaat');
            $table->tinyInteger('likert_q7')->nullable()->comment('Peluang kerja');
            $table->tinyInteger('likert_q8')->nullable()->comment('Ekonomi lokal');
            $table->tinyInteger('likert_q9')->nullable()->comment('Tidak konflik sosial');
            $table->tinyInteger('likert_q10')->nullable()->comment('Dampak positif desa');
            // Penerimaan Sosial & Harapan (11-15)
            $table->tinyInteger('likert_q11')->nullable()->comment('Mendukung pembangunan');
            $table->tinyInteger('likert_q12')->nullable()->comment('Dikelola berkelanjutan');
            $table->tinyInteger('likert_q13')->nullable()->comment('Masyarakat merasakan manfaat');
            $table->tinyInteger('likert_q14')->nullable()->comment('Pengelola bertanggung jawab');
            $table->tinyInteger('likert_q15')->nullable()->comment('Bersedia mendukung');
            
            // Bagian C: Pendapatan Rumah Tangga
            $table->decimal('pendapatan_ikan', 15, 2)->nullable()->comment('Rp/bulan');
            $table->decimal('pendapatan_lain', 15, 2)->nullable()->comment('Rp/bulan');
            $table->decimal('total_pendapatan', 15, 2)->nullable()->comment('Rp/bulan');
            $table->enum('kontribusi', ['<50%', '50-80%', '>80%', '100%'])->nullable();
            $table->enum('jumlah_sumber', ['1 sumber', '2 sumber', '3 sumber', '>3 sumber'])->nullable();
            $table->enum('ketergantungan', ['Sangat bergantung', 'Cukup bergantung', 'Sedikit bergantung', 'Tidak bergantung'])->nullable();
            $table->enum('stabilitas', ['Stabil', 'Cenderung stabil', 'Tidak stabil', 'Sangat tidak stabil'])->nullable();
            $table->enum('peran_perempuan', ['Selalu', 'Sering', 'Jarang', 'Tidak pernah'])->nullable();
            $table->enum('kontribusi_perempuan', ['>75%', '51-75%', '25-50%', '<25%', 'Tidak dilibatkan'])->nullable();
            
            // Bagian D: Sosial & Kelembagaan
            $table->enum('anggota_kub', ['Ya sangat aktif', 'Ya tidak aktif', 'Tidak pernah', 'Tidak ada KUB'])->nullable();
            $table->enum('manfaat_kub', ['Sangat Setuju', 'Setuju', 'Netral', 'Tidak Setuju', 'Sangat Tidak Setuju'])->nullable();
            $table->enum('anggota_koperasi', ['Ya sangat aktif', 'Ya tidak aktif', 'Tidak pernah', 'Tidak ada koperasi'])->nullable();
            $table->enum('tertarik_koperasi', ['Sangat tertarik', 'Tertarik', 'Tidak tertarik', 'Sangat tidak tertarik', 'Sudah jadi anggota'])->nullable();
            $table->enum('manfaat_koperasi', ['Sangat Setuju', 'Setuju', 'Netral', 'Tidak Setuju', 'Sangat Tidak Setuju'])->nullable();
            
            // Pendapat Umum tentang Koperasi (7 checkboxes)
            $table->boolean('kop_rapat_tahunan')->default(false);
            $table->boolean('kop_aktif_partisipasi')->default(false);
            $table->boolean('kop_pengurus_kompeten')->default(false);
            $table->boolean('kop_transparan')->default(false);
            $table->boolean('kop_keuangan_sehat')->default(false);
            $table->boolean('kop_jaringan_luas')->default(false);
            $table->boolean('kop_percaya_profesional')->default(false);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masyarakat_surveys');
    }
};
