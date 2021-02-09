<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Redes;

class redesController extends Controller
{
    public function principal(){
        $redes=Redes::all();
        return view('adminlte.Redes',compact('redes'));
    }
    
    public function  ingresoredes(Request $request){
        $red=new Redes();
        $red->icono=$request->icono;
        $red->ruta=$request->ruta;
        $red->save();
        return redirect('admin/Redes-sociales');
        
    }
    public function formularioedit($id){
        $redes=Redes::find($id);
        return view('adminlte.editRedes',compact('redes'));
    }
    public function update($id,Request $request){
        $redes=Redes::find($id);
        $redes->icono=$request->icono;
        $redes->ruta=$request->ruta;
        $redes->save();
        return redirect('admin/Redes-sociales');
        
    }
    
    public function eliminar($id){
        $redes=Redes::find($id);        
        $redes->delete();
        return redirect('admin/Redes-sociales');
    }
}
