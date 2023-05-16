<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    protected $fillable = ['codigo','cod-sec','turbo_id','observaciones']; 

    protected $primaryKey = 'codigo';
}
