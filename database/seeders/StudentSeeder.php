<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studentData = [
            ['name' => 'suraj kumar', 'age' => '30', 'gender' => 'male'],
            ['name' => 'anand kumar', 'age' => '20', 'gender' => 'male'],
            ['name' => 'anita devi', 'age' => '32', 'gender' => 'female'],
            ['name' => 'sanjana tiwari', 'age' => '22', 'gender' => 'female'],
            ['name' => 'rahul tiwari', 'age' => '44', 'gender' => 'male'],
            ['name' => 'ashok pandey', 'age' => '24', 'gender' => 'male'],
            ['name' => 'santos sahu', 'age' => '18', 'gender' => 'male'],
            ['name' => 'sikha kumari', 'age' => '31', 'gender' => 'female'],
        ];
        
        foreach ($studentData as $student) {

            Student::create($student);
        }
    }
}