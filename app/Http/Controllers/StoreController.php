<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Garantia;
use App\Models\Redes;
use App\Models\Categoria;
use App\Models\Fabricante;
use App\Models\Tienda;

class StoreController extends Controller
{
    public function storepage(){
        $menus=Menu::all();
        $garantias=Garantia::all();
        $redes=Redes::all();
        $categorias=Categoria::all();
        $fabricantes=Fabricante::all();
        $tiendas=Tienda::all();
        return view('store',compact('menus','garantias','redes','categorias','fabricantes','tiendas'));
         
      }
}
