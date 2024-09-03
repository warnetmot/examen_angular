<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public $timestamps = false; 

    protected $fillable = ['titulo', 'descripcion', 'aula', 'docente', 'cupos'];

    
}
