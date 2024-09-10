@extends('layouts.admin')

@section('content')

    <h1>Cadastrar Cursos</h1>
    <hr>
    <a href="{{route('courses.index')}}">Listar</a><br>

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

            <form action="{{route('courses.store')}}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="name" class="form-label">Curso</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Curso" value="{{old('name')}}" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Preço do Curso" value="{{old('price')}}" required>
                </div>

                <p class="text-center"><button type="submit" id="btn_cadastrar" value="Cadastrar" class="btn btn-outline-success">Cadastrar</button></p>

            </form>
        </div>
    </div>



@endsection
