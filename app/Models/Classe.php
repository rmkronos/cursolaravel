<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Classe extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = ['name', 'description', 'course_id'];

    //Criar relacionamento entre um e muitos

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
