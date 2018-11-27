<?php

namespace App;

use App\Empresa;
use App\Empleado;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    public function empleado(){
        return $this->belongsTo('App\Empleado');
    }
    public function empleados(){
        return $this->belongsToMany('App\Empleado');
    }
    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }
}
