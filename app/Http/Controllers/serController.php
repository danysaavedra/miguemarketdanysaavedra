<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Cart;
use \App\User;
use \App\Product;
use App\Category;
use App\Subcategory;

class serController extends Controller
{
  public function usuario(){
  $usuarios = User::all();
$datalles=$usuarios->carrito;
  return view('/pedidos')->with( [ 'detalles' => $datalles] );



}


}
