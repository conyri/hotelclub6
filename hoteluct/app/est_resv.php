<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class est_resv extends Model
{
    protected $table = 'est_resv';     
    protected $fillable = [                
        'reserva',         
        'estado',
        'admin'    
    ];
}
