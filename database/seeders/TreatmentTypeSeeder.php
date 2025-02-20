<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TreatmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('treatment_types')->insert([
            "title" => fake()->sentence(3),
            "description" => fake()->sentence(30),
            "price" => rand(1000, 10000),
            "minutes" => rand(30, 120),
            "is_paid" => rand(0, 1),
            "status" => "active",
        ]);
    }
}
