<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Course;
use Illuminate\Http\Request;

class ClasseController extends Controller
{

    public function index(Course $course)
    {
        // dd($course);
      $classes = Classe::with('course')->where('course_id', $course->id)->orderBy('order_classe')->get();

      return view('classes.index', ['classes'=> $classes]);

    }


}
