@extends('layouts.admin')


@section('content')

<h1>Cadastrar Aula</h1>
<hr>
<a href="{{route('classe.index',['course'=>$course->id])}}">Listar</a><br>

<div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="card-header">Cadastrar Aula</div>
    <div class="card-body">

        {{-- Componente de mensagens do sistema --}}
        <x-alert />

        <form action="{{ route('classe.store') }}" method="POST">
            @csrf
            @method('POST')

            <input type="hidden" name="course_id" value="{{ $course->id }}">

            <div class="mb-3">
                <label for="name" class="form-label">Código do curso</label>
                <input type="text" class="form-control" id="codigo" name="codigo" value="{{$course->id}}" disabled>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nome do curso</label>
                <input type="text" class="form-control" id="nome_curso" name="nome_curso" value="{{$course->name}}" disabled>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Aula</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome da Aula" value="{{old('name')}}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Descrição</label>
                <textarea class="form-control" name="description" id="description" rows="5" required>{{ old('description') }}</textarea>
            </div>

            <p class="text-center"><button type="submit" id="btn_cadastrar" value="Cadastrar" class="btn btn-outline-success">Cadastrar</button></p>

        </form>
    </div>
</div>

@endsection
