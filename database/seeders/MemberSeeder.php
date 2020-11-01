<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
        [
            'level'=>'member',
            'name'=>'calon',
            'username'=>'calon',
            'email'=>'l@l.l',
            'password'=>bcrypt("password"),
            'remember_token'=>Str::random(60)
        ],
        ]);
    }
}
