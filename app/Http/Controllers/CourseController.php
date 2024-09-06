<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CourseController extends Controller
{
    /**
     * Listar os cursos.
     */
    public function index()
    {
        // Recuperar registro do banco de dados

        // $courses = Course::orderBy('id', 'desc')->get(); //ou Course::all()
        //Outro exemplo
        //$courses = Course::where('id', 1000)->get(); //ou Course::all()

        $courses = Course::orderBy('id', 'DESC')->simplePaginate(5);
        
        return view(
            'courses.index', 
            ['courses' => $courses]
        );
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
        //'Cadastrar no banco de dados'
        Course::create([
            'name' => $request->name,
        ]);

        return redirect()->route('courses.create')->with('success','Curso cadastrado com sucesso!');
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
