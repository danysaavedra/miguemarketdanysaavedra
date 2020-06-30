<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Cart;
use \App\User;
use \App\Product;
use App\Category;
use App\Subcategory;

class UsuarioController extends Controller
{
    public function  seccMigue(){

      $productos = Product::all();
      $cart = Cart::all();
      $user = User::all();

        return view('/pedidos', compact('cart','user','productos'));
    
    
      }

      public function finalizar(Request $request){


        $compraCliente = $request->all();
        
    /*  dd($compraCliente); */
        return view('/pedidos', compact('compraCliente'));
      

      }
}
