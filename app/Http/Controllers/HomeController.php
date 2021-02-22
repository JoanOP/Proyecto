<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Garantia;
use App\Models\Redes;
use App\Models\Contact;



class HomeController extends Controller
{
   
    public function index(){
      return view('index');
  }
 
 
  
 
}
