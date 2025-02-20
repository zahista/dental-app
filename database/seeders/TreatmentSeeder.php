<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('treatments')->insert([
            "title" => fake()->sentence(3),
            "description" => fake()->sentence(20),
            "tooth" => rand(1, 4).rand(1, 8),
            "appointment_id" => rand(1, 10),
            "user_id" => rand(1, 5),
            "doctor_id" => rand(1, 5),
            "type_id" => rand(1, 10),
        ]);
    }
}
