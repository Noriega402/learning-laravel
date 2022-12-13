@extends('layouts/principal')
@section('title', $title)
@section('content')
    <h1>Vista para actualizar datos de un empleado</h1>
    <h4>Actualizando empleado con id {{$empleado[0]->employee_id}}</h4>
    <h3>Nombre completo de empleado: {{$empleado[0]->employee_name}} {{$empleado[0]->employee_surname}}</h3>
@endsection