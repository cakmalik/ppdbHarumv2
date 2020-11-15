<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MemberSeeder extends Seeder
{
  
    public function run()
    {
        $students = Student::get();
        foreach($students as $std){
            $faker = Factory::create();
            DB::table('members')->insert([
            [
                'name'=>'calon',
                'username'=>Str::random(11),
                'level'=>'registered',
                'email'=>$std->token,
                'password'=>bcrypt("password"),
                'remember_token'=>Str::random(60),
            ],
        ]);
        }
    }
}
