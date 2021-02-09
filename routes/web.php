<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\productosController;
use App\Http\Controllers\redesController;
use App\Http\Controllers\GarantiaController;
use App\Http\Controllers\tiendaController;
use App\Http\Controllers\categoriaController;
use App\Http\Controllers\FabricanteController;
use App\Http\Controllers\adminlte\indexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*

Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('about', [AboutController::class, 'aboutpage']);
Route::get('store', [StoreController::class, 'storepage']);
Route::get('contacts', [HomeController::class, 'contactpage']);
Route::get('favorites', [HomeController::class, 'favoritopage']);
Route::get('checkout', [HomeController::class, 'checkoutpage']);
Route::get('questions', [PreguntasController::class, 'Questionpage']);
Route::get('/', [menuController::class, 'listado']);

Route::get('admin', [indexController::class, 'login']);
Route::get('admin/index', [indexController::class, 'index']);
Route::get('admin/menu', [indexController::class, 'ingresomenu']);

Route::get('admin/menu/edit/{id}', [indexController::class, 'mostrarformulario']);
Route::post('admin/ingreso/menu',[menuController::class,'ingresosm']);
Route::put('admin/menu/update/{id}',[menuController::class,'update']);
Route::delete('admin/menu/eliminar/{id}',[menuController::class,'eliminar']);

Route::get('admin/Homeproducto',[productosController::class,'ingresoproduct']);
Route::post('admin/ingreso/homeproducto',[productosController::class,'ingresoproductHome']);
Route::get('admin/Homeproducto/edit/{id}',[productosController::class,'formularioedit']);
Route::put('admin/Homeproducto/update/{id}',[productosController::class,'update']);
Route::delete('admin/Homeproducto/eliminar/{id}',[productosController::class,'eliminar']);

Route::get('admin/Redes-sociales',[redesController::class,'principal']);
Route::post('admin/ingreso/redes',[redesController::class,'ingresoredes']);
Route::get('admin/Redes-sociales/edit/{id}',[redesController::class,'formularioedit']);
Route::put('admin/Redes-sociales/update/{id}',[redesController::class,'update']);
Route::delete('admin/Redes-sociales/eliminar/{id}',[redesController::class,'eliminar']);


Route::get('admin/referencias',[GarantiaController::class,'referencias']);
Route::post('admin/ingreso/referencias',[GarantiaController::class,'ingresorefe']);
Route::get('admin/referencias/edit/{id}',[GarantiaController::class,'formularioedit']);
Route::put('admin/referencias/update/{id}',[GarantiaController::class,'update']);
Route::delete('admin/referencias/eliminar/{id}',[GarantiaController::class,'eliminar']);

Route::get('admin/abouts',[AboutController::class,'aboutus']);
Route::post('admin/ingreso/abouts',[AboutController::class,'ingresoabout']);
Route::get('admin/abouts/edit/{id}',[AboutController::class,'formularioedit']);
Route::put('admin/abouts/update/{id}',[AboutController::class,'update']);
Route::delete('admin/abouts/eliminar/{id}',[AboutController::class,'eliminar']);

Route::get('admin/store',[tiendaController::class,'tienda']);
Route::post('admin/ingreso/store',[tiendaController::class,'ingresotienda']);
Route::get('admin/store/edit/{id}',[tiendaController::class,'edit']);
Route::put('admin/store/update/{id}',[tiendaController::class,'update']);
Route::delete('admin/store/eliminar/{id}',[tiendaController::class,'eliminar']);

Route::get('admin/categorias',[categoriaController::class,'indexcategoria']);
Route::post('admin/ingreso/categorias',[categoriaController::class,'ingresocategoria']);
Route::get('admin/categorias/edit/{id}',[categoriaController::class,'edit']);
Route::put('admin/categorias/update/{id}',[categoriaController::class,'update']);
Route::delete('admin/categorias/eliminar/{id}',[categoriaController::class,'eliminar']);

Route::get('admin/fabricantes',[FabricanteController::class,'indexfabricante']);
Route::post('admin/ingreso/fabricantes',[FabricanteController::class,'ingresofabricantes']);
Route::get('admin/fabricantes/edit/{id}',[FabricanteController::class,'edit']);
Route::put('admin/fabricantes/update/{id}',[FabricanteController::class,'update']);
Route::delete('admin/fabricantes/eliminar/{id}',[FabricanteController::class,'eliminar']);



