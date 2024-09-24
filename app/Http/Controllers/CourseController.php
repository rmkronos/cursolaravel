<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
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
    public function store(CourseRequest $request)
    {
        //Valida os campos do form
        $request->validated();

        //'Cadastrar no banco de dados'
        // Course::create([
        //     'name' => $request->name,
        //     'primce' => $request->price,
        // ]);

        //Ou
        Course::create($request->all());

        return redirect()->route('courses.index')->with('success','Curso cadastrado com sucesso!');
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
    public function update(CourseRequest $request, $id)
    {
        //ou Request $request, Course $course
        //$course->update(['name'=>$request->name, 'price'=>$request->price])

        //Validacao do form

        $request->validated();

        $course = Course::find($id);
        $course->update($request->all());

        return redirect()->route('courses.index')->with('success', 'Curso alterado com sucesso!');


    }

    /**
     * Remove do banco de dados
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('course.index')->with('success', 'Resitro deletado com sucesso');

    }
}
