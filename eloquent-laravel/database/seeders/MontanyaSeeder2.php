<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Montanya;

class MontanyaSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Montanya::create([
            [
                'nombre' => 'Denali',
                'altura' => 6190,
                'perteneceACordillera' => true,
                'fechaPrimeraEscalada' => '1913-06-07',
                'continente' => 'América'
            ],
            [
                'nombre' => 'Aconcagua',
                'altura' => 6961,
                'perteneceACordillera' => true,
                'fechaPrimeraEscalada' => '1897-01-14',
                'continente' => 'América'
            ],
            [
                'nombre' => 'Jaizkibel',
                'altura' => 448,
                'perteneceACordillera' => false,
                'fechaPrimeraEscalada' => '2000-12-18',
                'continente' => 'Europa'
            ],
        ]); 
    }
}
