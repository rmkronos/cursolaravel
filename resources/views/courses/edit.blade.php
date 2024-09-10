@extends('layouts.admin')

@section('content')

    <h1>Editar Curso</h1>
    <hr>
    <a href="{{route('courses.index')}}">Listar</a>

    <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <div class="card-header">Novo Curso</div>
        <div class="card-body">
            {{-- <div class="card-title text-center">Cadastrar</div> --}}
            @if (session('success'))

            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif

            @if ($errors->any())

                @foreach ($errors->all() as $error)

                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <strong>{{ $error }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                @endforeach
            @endif

            <form action="{{route('courses.update', ['course'=> $course->id ])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb3">
                    <label for="name" class="form-label">Código</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" value="{{$course->id}}" disabled>
                </div>
                <div class="mb-3">
                    <input type="hidden" name="id" value="{{ $course->id }}">
                    <label for="name" class="form-label">Curso</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Curso" value="{{ old('name', $course->name) }}" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Preço do Curso" value="{{ old('price', $course->price) }}" required>
                </div>

                <p class="text-center"><button type="submit" id="btn_cadastrar" value="Salvar" class="btn btn-outline-success">Salvar</button></p>

            </form>
        </div>
    </div>

@endsection

