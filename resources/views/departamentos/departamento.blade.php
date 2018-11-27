@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  
  <h2></h2>
  <h3></h3>
  <h3></h3>

    <table>
    <tr>
      <th>Departamento:</th>
      <th>Codigo:</th>
      <th>Empleados:</th>
    </tr>    
    <tr>
      <td><a href="/departamento/{{$departamento->id}}">{{$departamento->nombre}}</a></td>
      <td><a href="/departamento/{{$departamento->id}}">{{$departamento->codigo}}</a></td>
      <td>
        <ul>
      @foreach($departamento->empleados as $empleado)
        <li><a href="/empleado/{{$empleado->id}}">{{$empleado->nombre}}</a></li>
      @endforeach
      </ul>
      </td>
    </tr>
  </table>
@endsection
