<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClasseRequest;
use App\Models\Classe;
use App\Models\Course;
use Illuminate\Http\Request;

class ClasseController extends Controller
{

    public function index(Course $course)
    {
        // dd($course);
      $classes = Classe::with('course')->where('course_id', $course->id)->orderBy('order_classe')->get();

      return view('classes.index', ['classes'=> $classes, 'course'=>$course]);

    }

    public function create(Course $course){

        return view ('classes.create',['course' => $course]);

    }

    public function store(ClasseRequest $request){

        //Validacao dos campos do form, lembrando que se algum campo não estiver na ClasseRequest deverá ser adicionado o Request para poder carregar o campo

        $request->validated();

        $lastOrder = Classe::where('course_id', $request->course_id)->orderBy('order_classe', 'DESC')->first();

        if($lastOrder =='' || $lastOrder == 'null'){
            $lastOrder = 1;
        }else{
            $lastOrder = $lastOrder->order_classe + 1;
        }

        //ou $lastOrder ?  $lastOrder->order_classe + 1 : 1

        Classe::create([
            'name' => $request->name,
            'description' => $request->description,
            'order_classe'=> $lastOrder ,
            'course_id' => $request->course_id
        ]);

        return redirect()->route('classe.index',['course'=>$request->course_id])->with('success','Aula cadastrada com sucesso!');

    }


}
