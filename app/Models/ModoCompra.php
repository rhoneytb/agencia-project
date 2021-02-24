<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModoCompra extends Model
{
    protected $fillable = ['nome',
                           'percentual_aumento'];
    
    protected $table = "modo_compra";
    //
}
