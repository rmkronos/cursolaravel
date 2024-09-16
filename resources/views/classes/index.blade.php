@extends('layouts.admin')


@section('content')

<h1>Listar Classes</h1>
<hr>

<a href="{{route('course.index')}}">Listar Cursos</a>
<a href="{{route('classe.create', ['course'=> $course->id ])}}">Cadastrar Aula</a>
<br>
<div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="card-header">Lista</div>

    {{-- Componente de mensagens do sistema --}}
    <x-alert />

    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Classe</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data</th>
                <th scope="col">Código Curso</th>
                <th scope="col">Curso</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($classes as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->description}}</td>
                    <td>{{\Carbon\Carbon::parse($value->created_at)->format('d/m/Y H:i:s')}}</td>
                    <td>{{$value->course_id}}</td>
                    <td>{{$value->course->name}}</td>

                    <td>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('classe.index', ['course'=> $value->id ]) }}" class="btn btn-outline-success">Aulas</a>
                            <a href="{{ route('course.show', ['course'=> $value->id ]) }}" class="btn btn-outline-success">Visualizar</a>
                            <a href="{{ route('course.edit', ['course'=> $value->id ]) }}" class="btn btn-outline-warning">Editar</a>
                            <form action="{{ route('course.destroy', ['course'=> $value->id] )}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Deseja deletar esse registro?')">Deletar</button>
                            </form>

                        </div>
                    </td>
                </tr>
                @empty
                    <div class="alert alert-danger" role="alert">
                        Nenhum resgistro encontrado!
                    </div>
                @endforelse
            </tbody>
        </table>
        {{-- <div class="d-flex justify-content-center">{{ $courses->links() }}</div> --}}
    </div>
</div>

@endsection
