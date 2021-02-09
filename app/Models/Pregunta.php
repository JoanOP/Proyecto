<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    public $table='preguntas';
    public $timestamps=false;
     protected $fillable = [
        'titulo', 
        'descripcion',
         
         
     ];
 
}
