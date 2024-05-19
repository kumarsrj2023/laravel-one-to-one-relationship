<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 8; $i++) { 
            Contact::create([
                'email'  => fake()->email(),
                'phone' => '9198' . fake()->randomNumber(6, true),
                'address'   => fake()->address(),
                'city' => fake()->city(),
                'student_id'   => $i,
            ]);
        }
    }
}
