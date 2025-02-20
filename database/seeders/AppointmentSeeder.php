<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appointments')->insert([
            "start_at" => fake()->date(),
            "title" => fake()->sentence(3),
            "description" => fake()->sentence(),
            "notes" => fake()->sentence(),
            "user_id" => rand(1, 5),
        ]);
    }
}
