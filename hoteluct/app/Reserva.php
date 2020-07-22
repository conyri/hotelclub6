<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reserva';     
    protected $fillable = [                 
        'Rut_client',         
        'N_hab',
        'fecha_E',
        'fecha_S',
        'total_dias',
        'servicios',
        'costo_dia',
        'costo_total',
        'descuento',
        'costobruto'    
    ];
}
