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
                'value'=>'+6281335122672',
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
        ]);
    }
}
