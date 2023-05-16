<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class turnos extends Model
{
    protected $fillable = ['codigo','turno']; 

    protected $primaryKey = 'codigo';
}
