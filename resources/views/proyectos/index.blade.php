@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Titulo</th>
      <th>Responsable</th>
    </tr>
    @foreach($ObjetosProyecto as $ObjetoProyecto)
    <tr>
      <td><a href="/proyecto/{{$ObjetoProyecto->id}}">{{$ObjetoProyecto->id}}</a></td>
      <td><a href="/proyecto/{{$ObjetoProyecto->id}}">{{$ObjetoProyecto->nombre}}</a></td>
      <td><a href="/proyecto/{{$ObjetoProyecto->id}}">{{$ObjetoProyecto->titulo}}</a></td>
      <td><a href="/empleado/{{$ObjetoProyecto->empleado->id}}">{{$ObjetoProyecto->empleado->nombre}}</a></td>
    </tr>  
    @endforeach
  </table>

@endsection
