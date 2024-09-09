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
    public function show(Request $request)
    {

        $course = Course::where('id', $request->course )->first();

        return view('courses.show',
            ['course' => $course]
        );
    }

    /**
     * Edite o curso
     */
    public function edit(Request $request)
    {
        $course = Course::where('id', $request->course)->first();
        return view('courses.edit', [
            'course'=> $course
        ]);
    }

    /**
     * Editar no banco de dados
     */
    public function update(Request $request, $id)
    {

        $course = Course::find($id);
        $course->update($request->all());

        return redirect()->route('courses.index')->with('success', 'Curso alterado com sucesso!');


    }

    /**
     * Remove do banco de dados
     */
    public function destroy(string $id)
    {
        dd('Excluir do banco de dados');
    }
}
