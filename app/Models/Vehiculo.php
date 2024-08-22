<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'matricula',
        'marca',
        'modelo',
        'anio_fabricacion',     
        'propietario_nombre', 
        'propietario_direccion', 
        'propietario_telefono',
        'fecha_registro',
        'tipo_combustible', 
        'kilometraje',
    ]; 

}
