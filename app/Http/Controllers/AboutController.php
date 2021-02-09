<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Garantia;
use App\Models\Redes;
use App\Models\About;
class AboutController extends Controller
{
    public function aboutpage(){
        $menus=Menu::all();
        $garantias=Garantia::all();
        $redes=Redes::all();
        $abouts=About::all();
        return view('about',compact('menus','garantias','redes','abouts'));
         
      }


      public function aboutus(){
        $abouts=About::all();
       return view ('adminlte.About',compact('abouts'));
 }

 public function ingresoabout(Request $request){
   $about=new About();
   $about->titulo=$request->titulo;
   $about->descripcion=$request->descripcion;
   $about->imagen=$request->imagen;
   $about->save();
   return redirect('admin/abouts');

 }
      

      public function formularioedit($id){
        $abouts=About::find($id);
        return view ('adminlte.editAbout',compact('abouts'));
      }
      
      public function update($id,Request $request){
   $abouts=About::find($id); 
   $abouts->titulo=$request->titulo;
   $abouts->descripcion=$request->descripcion;
   $abouts->imagen=$request->imagen;
   $abouts->save();
   return redirect('admin/abouts');

 }
      public function eliminar($id){
   $abouts=About::find($id); 
   
   $abouts->delete();
   return redirect('admin/abouts');

 }

      
}
