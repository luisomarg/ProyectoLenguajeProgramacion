<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reg_acedm extends Model
{
    protected $fillable = ['codigo','user_id','materia_id','calificacion','status','observaciones']; 

    protected $primaryKey = 'codigo';
}
