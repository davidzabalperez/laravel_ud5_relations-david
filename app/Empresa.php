<?php

namespace App;

use App\Empleado;
use App\Proyecto;
use App\Departamento;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public function empleados(){
        return $this->hasMany('App\Empleado');
    }
    public function departamentos(){
        return $this->hasMany('App\Departamento');
    }
    public function proyectos(){
        return $this->hasMany('App\Proyecto');
    }
}
