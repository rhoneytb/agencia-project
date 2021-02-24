<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoQuarto extends Model
{
    protected $fillable = ['nome'];
    
    protected $table = "tipo_quarto";
    //
}
