<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [

        'folio',
        'codigo_referido_id',
        'descuento_activo_id',
        'lead_id'


    ];

    public function empleados(){


       return $this->belongsTo(Empleado::class , 'id');
        
        //return $this->belongsTo('App\Empleado' , 'codigo_referido_id');

    }

    public function descuento(){

        return $this->belongsTo(descuento::class , 'id');

    }

    public function lead(){

        return $this->belongsTo(Leads::class , 'id');

    }
}
