@extends('layouts.admin')

@section('content')

    <h1>Lista de Cursos</h1>
    <hr>

    <a href="{{route('course.create')}}">Cadastrar</a><br>
    <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <div class="card-header">Lista</div>

        {{-- Componente de mensagens do sistema --}}
        <x-alert />

        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Data</th>
                    <th scope="col" class="text-center">Ações</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>R$ {{ number_format($value->price, 2, ',', '.') }}</td>
                        <td>{{\Carbon\Carbon::parse($value->created_at)->format('d/m/Y H:i:s')}}</td>
                        {{-- <td>
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
                        </td> --}}
                        <td class="text-center">
                                {{-- <ul class="navbar-nav"> --}}
                                    <div class="dropdown">
                                        <a href="#" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="{{ route('classe.index', ['course'=> $value->id ]) }}" class="dropdown-item">Aulas</a>
                                            <a href="{{ route('course.show', ['course'=> $value->id ]) }}" class="dropdown-item">Visualizar</a>
                                            <a href="{{ route('course.edit', ['course'=> $value->id ]) }}" class="dropdown-item">Editar</a>
                                            <form action="{{ route('course.destroy', ['course'=> $value->id] )}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('Deseja deletar esse registro?')" class="dropdown-item">Deletar</button>
                                            </form>
                                        </div>
                                    </div>
                                {{-- </ul> --}}
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




