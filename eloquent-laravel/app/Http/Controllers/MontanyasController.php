<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MontanyasController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $coleccionA = DB::table('montanyas')
            ->where('perteneceACordillera', 1)
            ->where('fechaPrimeraEscalada', '>', '2000-01-01')
            ->whereRaw("LOWER(continente) = 'europa'")
            ->get();


        $coleccionB = DB::table('montanyas')
            ->where('altura', '>=', 1500)
            ->orWhere(function ($query) {
                $query->where('altura', '<', 1500)
                    ->where('perteneceACordillera', 0)
                    ->whereRaw("nombre NOT REGEXP '^[AEIOUaeiou]'");
            })
            ->get();

        return view('index', [
            'coleccionA' => $coleccionA,
            'coleccionB' => $coleccionB,
        ]);
    }

}
