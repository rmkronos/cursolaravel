@extends('layouts.admin')

@section('content')

    <h1>Detalhe do Curso</h1>
    <hr>
    <a href="{{route('courses.index')}}">Listar</a><br>
    <a href="{{route('courses.edit')}}">Editar</a><br>

@endsection
    