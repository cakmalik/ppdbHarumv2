<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setups')->insert([
            [
                'name'=>'pesan_wa',
                'value'=>'Terima kasih telah mendaftar di SDIT Harapan Umat, Berikut kode akses untuk login :',
                'info'=>'pesan saat mengirimkan token'
            ],
            [
                'name'=>'nomor_wa',
                'value'=>'+6285746507030',
                'info'=>'Ini nomor wa admin/operator'
            ],
            [
                'name'=>'pesan_siswa_baru',
                'value'=>'<p> Terima kasih telah memilih SDIT Harapan Umat (HARUM) Jember. <br> untuk ikut membantu generasi putra/i
                    anda menjadi generasi Unggul dan Cinta Al-Quran</p>
                <p>Segala informasi terkait pendaftaran bisa anda temukan disini</p>',
                'info'=>'info saat peserta pertama kali login'
            ],
            [
                'name'=>'pesan_welcome',
                'value'=>'<h1>Selamat Datang</h1>
                <p>calon peserta didik baru di website</p>
                <p>PPDB SDIT Harapan Umat Jember</p>',
                'info'=>'Ini pesan welcome saat pertama kali aplikasi ini dijalankan'
            ],
            [
                'name'=>'pengumuman_welcome',
                'value'=>'Tidak ada pengumuman',
                'info'=>'Ini pesan di menu pengumuman guest'
            ],
            [
                'name'=>'judul_welcome',
                'value'=>'PENDAFTARAN PPDB',
                'info'=>'Ini Judul welcome'
            ],
            [
                'name'=>'alur_daftar_ulang',
                'value'=>'                        <p>
                            1. Cek Rincian Daftar Ulang yang Tertera Sebelumnya, Jika ada yang kurang jelas bisa ditanyakan di
                            sekolah.
                            2. Lakukan Transfer dengan Nominal yang sesuai seperti di Rincian sebelumnya. Transfer ke No. Rek.
                            4441234007. a/n :
                            Sekolah Dasar Islam Terpadu Harapan Umat
                            3. Setelah melakukan transfer, Lakukan konfirmasi ke
                            nomor 081 335 122 672. dengan format sbb:
                            4. Batas Daftar Ulang Maksimal hingga 14 Maret 2020. bagi yang tidak melakukan daftar ulang hingga waktu
                            yang telah
                            di
                            tentukan, maka kami nyatakan mengundurkan diri.
                        </p>',
                'info'=>'Ini alur daftar ulang'
            ],
        ]);
    }
}
