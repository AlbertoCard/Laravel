@extends('layouts.plantilla')

@section('title', 'cursos ' . $curso->name)

@section('content')
    <h1>Bienvenido al curso:  {{$curso->name}} </h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <p><strong>Catrgoria: </strong>{{$curso->categoria}}</p>
    <p>{{$curso->description}}</p>
@endsection

