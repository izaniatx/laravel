<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Montanya extends Model
{
    use HasFactory;

    protected $table = 'montanyas';

    protected $fillable = [
        'nombre',
        'altura',
        'perteneceACordillera',
        'fechaPrimeraEscalada',
        'continente',
    ];
}