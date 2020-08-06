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
    public function getpedidos(){

        $orders = Order::all();

            $orders->transform(function($order, $key)
            {
                $order->cart = unserialize($order->cart);

                return $order;
            });


        return view('pedidos.cliente',['orders' => $orders]);

      }


}

