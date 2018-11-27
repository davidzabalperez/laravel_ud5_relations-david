<?php

namespace App;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function empleados(){
        return $this->hasMany('App\Empleado');
    }
    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }
}
