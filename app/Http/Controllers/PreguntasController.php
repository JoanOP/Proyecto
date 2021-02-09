<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Garantia;
use App\Models\Redes;
//use App\Models\Pregunta;
class PreguntasController extends Controller
{
    public function Questionpage(){
        $menus=Menu::all();
        $garantias=Garantia::all();
        $redes=Redes::all();
       // $preguntas=Pregunta::all();
        return view('questions',compact('menus','garantias','redes'));
      }
}
