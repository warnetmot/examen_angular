<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
   
    public $timestamps = false;
    
    protected $fillable = ['name', 'email', 'phone', 'address', 'city', 'country', 'birth_date', 'gender', 'age'];


} 
