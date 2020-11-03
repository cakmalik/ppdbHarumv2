<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitlemenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titlemenus')->insert([
            ['name'=>'Admin'],
            ['name'=>'Operator'],
            ['name'=>'Siswa'],
            ['name'=>'Peserta'],
        ]);
    }
}
