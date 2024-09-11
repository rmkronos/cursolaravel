<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Rotas do curso
Route::get('/index-course',  [CourseController::class, 'index'])->name('course.index');
Route::get('/show-course/{course}',   [CourseController::class, 'show'])->name('course.show');
Route::get('/create-course', [CourseController::class, 'create'])->name('course.create');
Route::post('/store-course',  [CourseController::class, 'store'])->name('course.store');
Route::get('/edit-course/{course}',   [CourseController::class, 'edit'])->name('course.edit');
Route::put('/update-course/{course}', [CourseController::class, 'update'])->name('course.update');
Route::delete('/destroy-course/{course}',[CourseController::class, 'destroy'])->name('course.destroy');


//Class (Aulas)
Route::get('/index-class/{course}',  [ClasseController::class, 'index'])->name('classe.index');
