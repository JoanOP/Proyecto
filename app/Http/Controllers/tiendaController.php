<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Tienda;


class tiendaController extends Controller
{
    public function tienda(){
        $tiendas=Tienda::all();
        return view ('adminlte.tienda',compact('tiendas'));
    }
public function ingresotienda(Request $request){
    $producto=new Tienda();
    $file=$request->file('imagen');
    $img=time()."-".$file->getClientOriginalName();
    $producto->nombre=$request->nombre;
    $producto->precio=$request->precio;
    $producto->tipo=$request->tipo;
    $producto->imagen=$img;
    $producto->save();
    Storage::disk('imagenStore')->put($img,\File::get($file));
    return redirect('admin/store');

}
    public function edit($id){
        $producto=Tienda::find($id);
        return view ('adminlte.editStore',compact('producto'));
    }
    public function update($id,Request $request){
    $producto=Tienda::find($id);
    $producto->nombre=$request->nombre;
    $producto->precio=$request->precio;
    $producto->tipo=$request->tipo;
    $producto->imagen=$request->imagen;
    $producto->save();
    return redirect('admin/store');

}
    public function eliminar($id){
    $producto=Tienda::find($id);
   
    $producto->delete();
    return redirect('admin/store');

}


}