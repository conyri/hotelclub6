<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salones extends Model
{
    //
    protected $table = 'salones';     
    protected $fillable = [        
        'tipo_Salon',         
        'valor_dia',         
        'descripcion'
    ];

}
