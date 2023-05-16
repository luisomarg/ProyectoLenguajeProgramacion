<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pensum extends Model
{
    protected $fillable = ['codigo','identificador','carrera_id','observaciones']; 

    protected $primaryKey = 'codigo';
}
