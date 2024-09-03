<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    public $timestamps = false;

    protected $fillable = ['nombre', 'email', 'telefono', 'CI', 'direccion', 'edad', 'genero', 'tutor'];

    
}
