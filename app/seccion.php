<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seccion extends Model
{
    protected $fillable = ['codigo','identifcador']; 

    protected $primaryKey = 'codigo';
}
