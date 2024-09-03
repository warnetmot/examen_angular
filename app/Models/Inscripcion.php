<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones';

    public $timestamps = false; 

    protected $fillable = ['f_inscripcion', 'estudiante_id', 'curso_id'];
    
    public function estudiante()
    {
        return $this -> belongsTo(Estudiante::Class);
    }
    public function curso()
    {
        return $this -> belongsTo(Curso::Class);
    }

}
