<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';
    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'codigo_referido'
    ];

    public function transaction(){

        return $this->hasMany(Transactions::class);

    }

}
