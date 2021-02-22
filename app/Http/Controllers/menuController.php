<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Producto;
use App\Models\Garantia;
use App\Models\Redes;
class menuController extends Controller
{
   public function listado(){
    $menus=Menu::all();
    $productos=Producto::all();
    $garantias=Garantia::all();
    $redes=Redes::all();
    return view('index',compact('menus','productos','garantias','redes'));
   }

   public function ingresosm(Request $request){
     
      $menu=new Menu();
      $menu->descripcion=$request->descrip;
      $menu->ruta=$request->ruta;
      $menu->orden=$request->orden;
      $menu->save();
     
      return redirect('admin/menu')->with('sdasadsasd');;

   }
   public function update($id, Request $request){
     
      $menu=Menu::find($id);
      $menu->descripcion=$request->descrip;
      $menu->ruta=$request->ruta;
      $menu->orden=$request->orden;
      $menu->save();
      return redirect('admin/menu');

   }
   public function eliminar($id){
     
      $menu=Menu::find($id);
      $menu->delete();
      return redirect('admin/menu');

   }


  
}
