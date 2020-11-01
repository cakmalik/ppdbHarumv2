<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
        [
            'level'=>'admin',
            'name'=>'M. Hasin Ilmalik',
            'username'=>'admin',
            'email'=>'m@m.m',
            'password'=>bcrypt('123'),
            'remember_token'=>Str::random(60)
        ],
        [
            'level'=>'op',
            'name'=>'Ikromudin',
            'username'=>'operator',
            'email'=>'i@i.i',
            'password'=>bcrypt('123'),
            'remember_token'=>Str::random(60)
        ],
        ]);
    }
}
