<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\MontanyasSeeder;

class MontanyasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('montanyas')->insert([
            [
                'nombre' => 'Mont Blanc',
                'altura' => 4808,
                'perteneceACordillera' => true,
                'fechaPrimeraEscalada' => '1786-08-08',
                'continente' => 'Europa'
            ],
            [
                'nombre' => 'Kilimanjaro',
                'altura' => 5895,
                'perteneceACordillera' => false,
                'fechaPrimeraEscalada' => '1889-10-06',
                'continente' => 'Africa'
            ],
            [
                'nombre' => 'Everest',
                'altura' => 8848,
                'perteneceACordillera' => true,
                'fechaPrimeraEscalada' => '1953-05-29',
                'continente' => 'Asia'
            ],
        ]);
    }
}
