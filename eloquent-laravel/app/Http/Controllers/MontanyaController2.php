<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Montanya;

class MontanyaController2 extends Controller
{
    public function index2()
    {
        $montanyasOrdenadas = Montanya::orderBy('altura', 'desc')->get();
        return view('index2', ['montanyas' => $montanyasOrdenadas]);
    }

    public function show($id)
    {
        $montanya = Montanya::findOrFail($id);
        return view('show', ['montanya' => $montanya]);
    }

    public function alta()
    {
        $montanyaMasAlta = Montanya::orderBy('altura', 'desc')->first();
        return view('alta', ['montanya' => $montanyaMasAlta]);
    }
}
