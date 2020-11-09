<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fund_categories')->insert([
            [
                'name'=>'standart',
                'gender'=>'l',
                'gedung'=>5500000,
                'perpustakaan'=>300000,
                'kegiatan'=>1000000,
                'bukumedia'=>1050000,
                'seragam'=>800000,
                'jilbab'=>0,
                'ipp'=>674000,
            ],
            [
                'name'=>'standart',
                'gender'=>'p',
                'gedung'=>5500000,
                'perpustakaan'=>300000,
                'kegiatan'=>1000000,
                'bukumedia'=>1050000,
                'seragam'=>800000,
                'jilbab'=>160000,
                'ipp'=>674000,
            ],
            [
                'name'=>'kakak 1',
                'gender'=>'l',
                'gedung'=>5250000,
                'perpustakaan'=>300000,
                'kegiatan'=>1000000,
                'bukumedia'=>1050000,
                'seragam'=>800000,
                'jilbab'=>0,
                'ipp'=>649000,
            ],
            [
                'name'=>'kakak 1',
                'gender'=>'p',
                'gedung'=>5250000,
                'perpustakaan'=>300000,
                'kegiatan'=>1000000,
                'bukumedia'=>1050000,
                'seragam'=>800000,
                'jilbab'=>160000,
                'ipp'=>649000,
            ],
            [
                'name'=>'kakak 2',
                'gender'=>'l',
                'gedung'=>5000000,
                'perpustakaan'=>300000,
                'kegiatan'=>1000000,
                'bukumedia'=>1050000,
                'seragam'=>800000,
                'jilbab'=>0,
                'ipp'=>624000,
            ],
            [
                'name'=>'kakak 2',
                'gender'=>'p',
                'gedung'=>5000000,
                'perpustakaan'=>300000,
                'kegiatan'=>1000000,
                'bukumedia'=>1050000,
                'seragam'=>800000,
                'jilbab'=>160000,
                'ipp'=>624000,
            ],
            [
                'name'=>'lain-lain 1',
                'gender'=>'l',
                'gedung'=>4750000,
                'perpustakaan'=>300000,
                'kegiatan'=>1000000,
                'bukumedia'=>1050000,
                'seragam'=>800000,
                'jilbab'=>0,
                'ipp'=>599000,
            ],
            [
                'name'=>'lain-lain 1',
                'gender'=>'p',
                'gedung'=>4750000,
                'perpustakaan'=>300000,
                'kegiatan'=>1000000,
                'bukumedia'=>1050000,
                'seragam'=>800000,
                'jilbab'=>160000,
                'ipp'=>599000,
            ],
            [
                'name'=>'lain-lain 2',
                'gender'=>'l',
                'gedung'=>4500000,
                'perpustakaan'=>300000,
                'kegiatan'=>1000000,
                'bukumedia'=>1050000,
                'seragam'=>800000,
                'jilbab'=>0,
                'ipp'=>508000,
            ],
            [
                'name'=>'lain-lain 2',
                'gender'=>'p',
                'gedung'=>4500000,
                'perpustakaan'=>300000,
                'kegiatan'=>1000000,
                'bukumedia'=>1050000,
                'seragam'=>800000,
                'jilbab'=>160000,
                'ipp'=>508000,
            ],
        ]);
    }
}
