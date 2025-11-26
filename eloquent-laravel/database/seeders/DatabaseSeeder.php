<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\MontanyasSeeder;
use App\Models\Montanya;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(MontanyasSeeder::class);
        $this->call(MontanyaSeeder2::class);
        Montanya::factory(10)->create();
    }
}
