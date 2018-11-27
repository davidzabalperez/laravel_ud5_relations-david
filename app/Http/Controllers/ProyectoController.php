<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{

  public function index()
  {
      $valores = Proyecto::all();

      return view ('proyectos.index')->with([
          'ObjetosProyecto'=>$valores
      ]);
  }

  public function get($id)
  {
      $valor=Proyecto::find($id);
      return view ('proyectos.proyecto')->with([
          'proyecto'=>$valor 
      ]);
  }

}
