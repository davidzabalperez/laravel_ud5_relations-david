@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>


  <table>
    <tr>
      <th>Id</th>
      <th>Codigo</th>
      <th>Nombre</th>
    </tr>
    @foreach( $valoresvista as $departamento)
    <tr>
      <td><a href="/departamento/{{$departamento->id}}">{{$departamento->id}}</a></td>
      <td><a href="/departamento/{{$departamento->id}}">{{$departamento->codigo}}</a></td>
      <td><a href="/departamento/{{$departamento->id}}">{{$departamento->nombre}}</a></td>
    </tr>
    @endforeach
  </table>

@endsection
