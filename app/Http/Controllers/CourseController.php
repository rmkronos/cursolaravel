<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Listar os cursos.
     */
    public function index()
    {
        return view('courses.index');
    }

     /**
     * Salvar o curso
     */
    public function create(Request $request)
    {
        return view('courses.create');
    }

    /**
     * Salvar o curso
     */
    public function store(Request $request)
    {
        dd('Cadastrar no banco de dados');
    }

    /**
     * Visualizar o curso
     */
    public function show()
    {
        return view('courses.show');
    }

    /**
     * Edite o curso
     */
    public function edit()
    {
        return view('courses.edit');
    }

    /**
     * Editar no banco de dados
     */
    public function update(Request $request, string $id)
    {
        dd('Editar no banco de dados');
    }

    /**
     * Remove do banco de dados
     */
    public function destroy(string $id)
    {
        dd('Excluir do banco de dados');
    }
}
