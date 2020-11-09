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
        ]);
    }
}
