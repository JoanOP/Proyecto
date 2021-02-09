<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public $table='menus';
    public $timestamps=false;
    protected $fillable = [
        'descripcion',
        'orden',
        
    ];

}
