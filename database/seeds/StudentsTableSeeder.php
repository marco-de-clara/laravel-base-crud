<?php

use Illuminate\Database\Seeder;

use App\Student;

use Faker\Generator as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $new_student = new Student();
            $new_student->name = $faker->name;
            $new_student->lastname = $faker->lastname;
            $new_student->matriculation_number = $faker->randomNumber($nbDigits = 6, $strict = false);
            $new_student->email_address = $faker->email;
            $new_student->save();
        }
    }
}
