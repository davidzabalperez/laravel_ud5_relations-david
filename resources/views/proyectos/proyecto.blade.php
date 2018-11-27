@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <table>
    <tr>
      <th>Proyecto:</th>
      <th>Titulo:</th>
      <th>Responsable:</th>
      <th>Colaboradores:</th>
    </tr>    
    <tr>
      <td><a href="/proyecto/{{$proyecto->id}}">{{$proyecto->nombre}}</a></td>
      <td><a href="/proyecto/{{$proyecto->id}}">{{$proyecto->titulo}}</a></td>
      <td><a href="/empleado/{{$proyecto->empleado->id}}">{{$proyecto->empleado->nombre}}</a></td>
      <td>
      <ul>
      @foreach($proyecto->empleados as $proyecto_empleados)
      
      <li><a href="/empleado/{{$proyecto_empleados->id}}">{{$proyecto_empleados->nombre}}</a></li>
      @endforeach
      </ul>
      </td>
      
      
      
    </tr>
  </table>
@endsection
