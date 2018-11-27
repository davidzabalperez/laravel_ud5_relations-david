<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;
use App\Empleado;
use App\Departamento;

class EmpresaController extends Controller
{
    public function index()
  {
      $valores = Proyecto::all();
      $valores1 = Empleado::all();
      $valores2 = Departamento::all();

      return view ('empresas.index')->with([
          'proyectos'=>$valores,
          'empleados'=>$valores1,
          'departamentos'=>$valores2
      ]);
  }
}
