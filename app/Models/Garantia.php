<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garantia extends Model
{
 
   use HasFactory;
   public $table='garantias';
   public $timestamps=false;
    protected $fillable = [
        'descripcion',
        'icono',
        'span'      
    ];
   
}
