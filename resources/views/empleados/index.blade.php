@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre/Apellido</th>
      <th>Departamento</th>
      <th>Responsable del proyecto</th>
    </tr>
    @foreach($empleados as $empleado)
    <tr>
      <td><a href="/empleado/{{$empleado->id}}">{{$empleado->id}}</a></td>
      <td><a href="/empleado/{{$empleado->id}}">{{$empleado->nombre}}{{$empleado->apellido1}}{{$empleado->apellido2}}</a></td>
      <td><a href="/departamento/{{$empleado->departamento->id}}">{{$empleado->departamento->nombre}}</a></td>
      <td><a href="/empleado/{{$empleado->id}}">{{$empleado->proyecto->nombre}}</a></td>
    </tr>
    @endforeach
  </table>

@endsection
