<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cotizacion extends Model
{
    protected $table = 'cotizacion';     
    protected $fillable = [                
        'Rut',         
        'nombre',
        'apellido',
        'correo',
        'tipo_hab',
        'tipo_salon',
        'Fecha_E',
        'Fecha_S',
        'cant_per',
        'adm'    
    ];
}
