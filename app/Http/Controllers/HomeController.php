<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Garantia;
use App\Models\Redes;


class HomeController extends Controller
{
   /*
    public function index(){
      return view('index');
  }*/
  public function contactpage(){
    $menus=Menu::all();
    $garantias=Garantia::all();
    $redes=Redes::all();
    return view('contacts',compact('menus','garantias','redes'));
  }
  public function favoritopage(){
    $menus=Menu::all();
    $garantias=Garantia::all();
    $redes=Redes::all();
    return view('favorites',compact('menus','garantias','redes'));
  }
  public function checkoutpage(){
    $menus=Menu::all();
    $garantias=Garantia::all();
    $redes=Redes::all();
    return view('checkout',compact('menus','garantias','redes'));
  }

  
 
}
