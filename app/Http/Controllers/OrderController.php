<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Cart;
use \App\User;
use \App\Product;
use App\Order;

class OrderController extends Controller
{
    public function borrarPedido($id)
  {
    $productoBorrar = Product::find($id);
    return view('product.delete')
    ->with([
    'products' => $productoBorrar
    ]);
  }

    public function borrarped(Request $request)
    {
        $id = $request['id'];

        $carritos = Cart::where('product_id', '=', $id);
        $carritos->delete();

        $product = Product::find($id);
        $product->delete();

        if ($request->isJson()) {
          return response()->json(['mensaje' => 'que seas muy feliz']);
        }
      return redirect('/productos')->with('mensaje', 'Borrado de Producto exitoso!');
    }
}
