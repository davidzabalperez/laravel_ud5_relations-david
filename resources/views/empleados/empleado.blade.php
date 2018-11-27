@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleado: <a href="/empleado/{{$empleado->id}}"> {{$empleado->nombre}}</a></h2>
  <h3>Responsable en el proyecto:<a href="/proyecto/{{$empleado->proyecto->id}}">{{$empleado->proyecto->nombre}}</a></h3>
  <h3>Colabora en los siguientes proyectos:</h3>
  <ul>
    @foreach($empleado->proyectos as $proyecto)
    <li><a href="/proyecto/{{$proyecto->id}}">{{$proyecto->nombre}}</a></li>
    @endforeach


  </ul>
@endsection
