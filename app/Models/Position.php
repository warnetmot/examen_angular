<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['job', 'description'];
    
    protected $table = 'position';
}
