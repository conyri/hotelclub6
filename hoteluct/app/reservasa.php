<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservasa extends Model
{
    //
    protected $table = 'reservasa';     
    protected $fillable = [        
        'tipo_Salon',         
        'valor_dia',         
        'rut_client',
        'fecha_E',
        'fecha_S',
        'dias_total',
        'coto_total'
    ];

}
