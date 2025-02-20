<?php

namespace Database\Seeders;

use App\Models\Treatment;
use App\Models\User;
use Dflydev\DotAccessData\Data;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        TreatmentSeeder::class;
        TreatmentTypeSeeder::class;
        AppointmentSeeder::class;
    }
}
