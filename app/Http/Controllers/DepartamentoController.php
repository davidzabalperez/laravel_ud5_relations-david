<?php

namespace App\Http\Controllers;

use App\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
  public function index ()
  {
      //el metodo all() hace un select
     $valores = Departamento::all();
     //nos devuelve la vista con el array
     return view('departamentos.index')->with([
         'valoresvista'=>$valores
     ]);
  }

  public function get ($id)
  {
    $departamento=Departamento::find($id);

    return view ('departamentos.departamento')->with([
        'departamento'=>$departamento
      ]);
      
  }
}
