<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redes extends Model
{
    use HasFactory;
    public $table='redes';
    public $timestamps=false;
    protected $fillable=[
        'icono',
        'ruta'
    ];
}
