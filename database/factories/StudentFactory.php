<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'token'=>Str::random(8),
            'full_name'=>$this->faker->name,
            'nick_name'=>$this->faker->firstName,
            'school_origin'=>$this->faker->safeEmailDomain,
            'gender'=>$this->faker->randomElement(['male', 'female']),
            'place_birth'=>$this->faker->city,
            'date_birth'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'special_needs'=>$this->faker->name,
            'address'=>$this->faker->address,
            'living'=>$this->faker->name,
            'dad'=>$this->faker->firstNameMale ,
            'dad_edu'=>$this->faker->name,
            'dad_occupation'=>$this->faker->name,
            'dad_income'=>$this->faker->name,
            'dad_phone'=>$this->faker->e164PhoneNumber,
            'mom'=>$this->faker->firstNameFemale ,
            'mom_edu'=>$this->faker->name,
            'mom_occupation'=>$this->faker->name,
            'mom_income'=>$this->faker->name,
            'mom_phone'=>$this->faker->e164PhoneNumber,
            'email'=>$this->faker->email,
            'status'=>1,
        ];
    }
}
