<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MargemLucro extends Model
{
    protected $fillable = ['modo_compra_id',
                           'percentual',
                           'moeda_id'];

    protected $table = "margem_lucro";
    //
}
