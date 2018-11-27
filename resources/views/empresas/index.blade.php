@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empresa</h2>

  <table>
    <tr>
      <th>Proyectos</th>
      <th>Empleados</th>
      <th>Departamentos</th>
    </tr>
    <tr>
      <td>
        <ul>
        @foreach($proyectos as $proyecto)
          <li><a href="/proyecto/{{$proyecto->id}}">{{$proyecto->nombre}}</a></li>
        @endforeach
        </ul>
      </td>
      <td>
        <ul>
        @foreach($empleados as $empleado)
          <li><a href="/empleado/{{$empleado->id}}">{{$empleado->nombre}}</a></li>
        @endforeach
        </ul>
      </td>
      <td>
        <ul>
        @foreach($departamentos as $departamento)
          <li><a href="/departamento/{{$departamento->id}}"> {{$departamento->nombre}}</a></li>
        @endforeach
        </ul>
      </td>
    </tr>
  </table>

@endsection
