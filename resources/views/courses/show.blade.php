@extends('layouts.admin')

@section('content')

    <h1>Detalhe do Curso</h1>
    <hr>
    <a href="{{route('courses.index')}}">Listar</a>
    <a href="{{ route('courses.edit', ['course' => $course->id ]) }}">Editar</a><br>



    <dl class="row">
        <dt class="col-sm-3">Código</dt>
        <dd class="col-sm-9">{{ $course->id}}</dd>
        <dt class="col-sm-3">Curso</dt>
        <dd class="col-sm-9">{{$course->name}}</dd>
        <dt class="col-sm-3">Cadastrado</dt>
        <dd class="col-sm-9">{{ Carbon\Carbon::parse($course->created_at)->format('d/m/Y H:i:s') }}</dd>
        <dt class="col-sm-3">Alterado</dt>
        <dd class="col-sm-9">{{ Carbon\Carbon::parse($course->updated_at)->format('d/m/Y H:i:s') }}</dd>
    </dl>

@endsection
