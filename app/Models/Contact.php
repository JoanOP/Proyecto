<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $table='contacts';
    public $timestamps=false;
     protected $fillable = [
        'titulo', 
        'icono',
        'descripcion',
   
     ];
 
}
