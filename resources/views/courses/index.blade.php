@extends('layouts.admin') 

@section('content')

    <h1>Lista de Cursos</h1>
    <hr>
    <a href="{{route('courses.show')}}">Visualizar</a><br>
    <a href="{{route('courses.create')}}">Cadastrar</a><br>
    
@endsection 

 


