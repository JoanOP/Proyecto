<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Garantia;
use App\Models\Redes;
use App\Models\Contact;
class ContactController extends Controller
{
  public function contactpage(){
    $menus=Menu::all();
    $garantias=Garantia::all();
    $contactos=Contact::all();
    $redes=Redes::all();
    return view('contacts',compact('menus','garantias','redes','contactos'));
  }
 
  

    public function indexcontact(){
        $contacts=Contact::all();
       return view ('adminlte.Contact',compact('contacts'));
 }

 public function ingresocontact(Request $request){

    $contacts=new Contact();
    $contacts->titulo=$request->titulo;
    $contacts->icono=$request->icono;
    $contacts->descripcion=$request->descripcion;
    $contacts->save();
    return redirect('admin/contact');
 
  }

  public function edit($id){
    $contacts=Contact::find($id);
    return view ('adminlte.editContact',compact('contacts'));
  }
  
  public function update($id,Request $request ){
    $contacts=Contact::find($id);
    $contacts->titulo=$request->titulo;
    $contacts->icono=$request->icono;
    $contacts->descripcion=$request->descripcion;
    $contacts->save();
    return redirect('admin/contact');
}
  public function eliminar($id){
    $contact=Contact::find($id); 
   $contact->delete();
    return redirect('admin/contact');
 
  }
 
  public function index(){
    return view('ingresar');
}

}
