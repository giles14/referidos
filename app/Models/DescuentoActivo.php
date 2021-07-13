<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescuentoActivo extends Model
{
    use HasFactory;

    protected $table = 'descuento_activos';
    public $timestamps = true;

    protected $fillable = [
        'empleado_id',
        'descuento_id'

    ];

}
