<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carreras extends Model
{
    protected $fillable = ['codigo','nombre','area','observaciones']; 

    protected $primaryKey = 'codigo';
}
