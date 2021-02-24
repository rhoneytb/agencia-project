<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    protected $fillable = ['tipo_quarto_id',
                           'hotel_id',
                           'moeda_id',
                           'valor'];
    
    protected $table = "tarifa";
    //
}
