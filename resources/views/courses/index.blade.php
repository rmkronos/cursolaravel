@extends('layouts.admin')

@section('content')

    <h1>Lista de Cursos</h1>
    <hr>

    <a href="{{route('courses.create')}}">Cadastrar</a><br>
    <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <div class="card-header">Lista</div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{\Carbon\Carbon::parse($value->created_at)->format('d/m/Y H:i:s')}}</td>
                        <td>
                            <a href="{{ route('courses.show', ['course'=> $value->id ]) }}" class="btn btn-outline-success">Visualizar</a>
                            <a href="{{ route('courses.edit', ['course'=> $value->id ]) }}" class="btn btn-outline-warning">Editar</a>
                        </td>
                    </tr>
                    @empty
                        <div class="alert alert-danger" role="alert">
                            Nenhum resgistro encontrado!
                        </div>
                    @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-center">{{ $courses->links() }}</div>
        </div>
    </div>

@endsection




