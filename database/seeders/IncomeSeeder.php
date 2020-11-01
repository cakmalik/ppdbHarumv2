<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncomeSeeder extends Seeder
{
// kurang dari Rp. 1.000.000
// Rp. 1.000.000 - Rp. 2.000.000
// Rp. 2.000.000 - Rp. 3.000.000
// Rp. 3.000.000 - Rp. 4.000.000
// Rp. 4.000.000 - Rp. 5.000.000
// Rp. 5.000.000 - Rp. 7,5.000.000
// Rp. 7,5.000.000 - Rp. 10.000.000
// Rp. 10.000.000 - Rp. 20.000.000
// Lebih dari Rp. 20.000.000
// Tidak berpenghasilan
    public function run()
    {
        DB::table('incomes')->insert([
            [
                'category'=>1,
                'amount'=>'kurang dari Rp. 1.000.000'
            ],
            [
                'category'=>2,
                'amount'=>'Rp. 1.000.000 - Rp. 2.000.000'
            ],
            [
                'category'=>3,
                'amount'=>'Rp. 2.000.000 - Rp. 3.000.000'
            ],
            [
                'category'=>4,
                'amount'=>'Rp. 3.000.000 - Rp. 4.000.000'
            ],
            [
                'category'=>5,
                'amount'=>'Rp. 4.000.000 - Rp. 5.000.000'
            ],
            [
                'category'=>6,
                'amount'=>'Rp. 5.000.000 - Rp. 7,5.000.000'
            ],
            [
                'category'=>7,
                'amount'=>'Rp. 7,5.000.000 - Rp. 10.000.000'
            ],
            [
                'category'=>8,
                'amount'=>'Rp. 10.000.000 - Rp. 20.000.000'
            ],
            [
                'category'=>9,
                'amount'=>'Lebih dari Rp. 20.000.000'
            ],
            [
                'category'=>10,
                'amount'=>'Tidak berpenghasilan'
            ],
        ]);
    }
}
