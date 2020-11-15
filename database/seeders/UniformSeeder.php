<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uniforms')->insert([
            [
                'gender'=>'l',
                'kode'=>'a',
                'category'=>'ld',
                'info'=>'Lebar dada',
                's'=>40,
                'm'=>42,
                'l'=>44,
                'xl'=>46,
                'xxl'=>48,
            ],
            [
                'gender'=>'l',
                'kode'=>'a',
                'category'=>'pb',
                'info'=>'Panjang baju',
                's'=>53,
                'm'=>56,
                'l'=>59,
                'xl'=>62,
                'xxl'=>64,
            ],
            [
                'gender'=>'l',
                'kode'=>'b',
                'category'=>'lp',
                'info'=>'Lebar pinggang',
                's'=>38,
                'm'=>40,
                'l'=>43,
                'xl'=>46,
                'xxl'=>49,
            ],
            [
                'gender'=>'l',
                'kode'=>'b',
                'category'=>'pc',
                'info'=>'Panjang celana',
                's'=>71,
                'm'=>74,
                'l'=>77,
                'xl'=>80,
                'xxl'=>83,
            ],

            // DI BAWAH INI PEREMPUAN
            
            [
                'gender'=>'p',
                'kode'=>'a',
                'category'=>'ld',
                'info'=>'Lebar dada',
                's'=>40,
                'm'=>42,
                'l'=>44,
                'xl'=>46,
                'xxl'=>48,
            ],
            [
                'gender'=>'p',
                'kode'=>'a',
                'category'=>'pb',
                'info'=>'Panjang baju',
                's'=>53,
                'm'=>56,
                'l'=>59,
                'xl'=>62,
                'xxl'=>64,
            ],
            [
                'gender'=>'p',
                'kode'=>'b',
                'category'=>'lp',
                'info'=>'Lebar pinggang',
                's'=>36,
                'm'=>38,
                'l'=>40,
                'xl'=>42,
                'xxl'=>44,
            ],
            [
                'gender'=>'p',
                'kode'=>'b',
                'category'=>'pc',
                'info'=>'Panjang rok',
                's'=>65,
                'm'=>68,
                'l'=>71,
                'xl'=>74,
                'xxl'=>77,
            ],
            //INI BAGIAN JILBAB
            [
                'gender'=>'p',
                'kode'=>'j',
                'category'=>'pd',
                'info'=>'Panjang depan Jilbab',
                's'=>62,
                'm'=>64,
                'l'=>66,
                'xl'=>68,
                'xxl'=>70,
            ],
            [
                'gender'=>'p',
                'kode'=>'j',
                'category'=>'pbl',
                'info'=>'Panjang belakang Jilbab',
                's'=>70,
                'm'=>72,
                'l'=>74,
                'xl'=>77,
                'xxl'=>79,
            ],
        ]);
    }
}
