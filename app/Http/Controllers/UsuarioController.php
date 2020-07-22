<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Cart;
use \App\User;
use \App\Order;

class UsuarioController extends Controller
{
    public function  seccMigue(){


      $orders = Auth::user()->orders;

      $orders->transform(function($order, $key)
      {
          $order->cart = unserialize($order->cart);
          return $order;
      });

  

   return view('/pedidos',['orders' => $orders]);
      }


//esta funcion debe estar en PrincipalController

    public function finalizar(Request $request){
     $carritoCompra = $request->except('_token');
     if(isset($carritoCompra['numberId'])) {
      foreach($carritoCompra['numberId'] as $key => $value){
     $carritos = Cart::where('product_id', '=', $value);
     $carritos->delete();
       }
      }
     $cart = new Cart ($carritoCompra);
     $order = new Order();
     $order->cart = serialize($cart);
     Auth::user()->orders()->save($order);
     return redirect('/')->with('mensaje', 'TU COMPRA SE PROCESÓ CON EXITO! (En breve nos comunicaremos con vos.)');
    }
}

