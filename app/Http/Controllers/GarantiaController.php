<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Garantia;

class GarantiaController extends Controller
{
    public function referencias(){
        $referencias=Garantia::all();
        return view ('adminlte.Referencias',compact('referencias'));
    }
    
    public function ingresorefe(Request $request ){
        
        $referencia=new Garantia();
        $referencia->descripcion=$request->descripcion;
        $referencia->icono=$request->icono;
        $referencia->span=$request->tipo;
        $referencia->save();
        return redirect('admin/referencias');
    }
    public function formularioedit($id){
        $referencias=Garantia::find($id);
        return view ('adminlte.editReferencias',compact('referencias'));
    }
    public function update($id,Request $request ){
        $referencias=Garantia::find($id);
        $referencias->descripcion=$request->descripcion;
        $referencias->icono=$request->icono;
        $referencias->span=$request->tipo;
        $referencias->save();
        return redirect('admin/referencias');
    }
    public function eliminar($id){
        $referencias=Garantia::find($id);
        
        $referencias->delete();
        return redirect('admin/referencias');
    }
}
