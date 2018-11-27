<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Departamento;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
  public function index ()
  {
    $valores = Empleado::all();
    $valores1 = Departamento::all();
    //nos devuelve la vista con el array
    return view('empleados.index')->with([
        'empleados'=>$valores,
        'departamentos'=>$valores1
    ]);
      return view ('empleados.index');
  }

  public function get ($id)
  {
    $empleado=Empleado::find($id);
    
      return view ('empleados.empleado')->with([
        'empleado'=>$empleado
      ]);
  }
}
