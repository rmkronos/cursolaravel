<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //Indicar a Tabela
    protected $table = 'courses';

    protected $fillable = ['name','price'];

}
