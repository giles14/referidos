<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class descuento extends Model
{
    use HasFactory;

    protected $table = 'descuentos';
    public $timestams = true;

    protected $fillable = [
        'nombre',
        'tipo',
        'porcentaje',
        'cantidad',
        'descuentoInscripcion'

    ];
}
