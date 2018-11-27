<?php

namespace App;

use App\Empresa;
use App\Departamento;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function proyecto(){
        return $this->hasOne('App\Proyecto');
    }
    public function departamento(){
        return $this->belongsTo('App\Departamento');
    }
    public function proyectos(){
        return $this->belongsToMany('App\Proyecto');
    }
    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }
}
