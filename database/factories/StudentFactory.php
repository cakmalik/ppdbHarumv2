<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{

    protected $model = Student::class;

    public function definition()
    {
        return [
            'token' => Str::random(8),
            'full_name' => $this->faker->name,
            'nick_name' => $this->faker->firstName,
            'school_origin' => $this->faker->safeEmailDomain,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'place_birth' => $this->faker->city,
            'date_birth' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'special_needs' => $this->faker->name,
            'address' => $this->faker->address,
            'living' => $this->faker->name,
            'dad' => $this->faker->firstNameMale,
            'dad_edu' => $this->faker->name,
            'dad_occupation' => $this->faker->name,
            'dad_income' => $this->faker->randomDigit,
            'dad_phone' => $this->faker->e164PhoneNumber,
            'mom' => $this->faker->firstNameFemale,
            'mom_edu' => $this->faker->name,
            'mom_occupation' => $this->faker->name,
            'mom_income' => $this->faker->randomDigit,
            'mom_phone' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->email,
            'status' => 1,

            'jumlah_saudara' => $this->faker->name,
            'rtrw' => $this->faker->name,
            'postalcode' => $this->faker->name,
            'desa' => $this->faker->name,
            'kecamatan' => $this->faker->name,
            'kota' => $this->faker->name,
            'provinsi' => $this->faker->name,
        ];
    }
}
