@extends('layouts.plantilla')

@section('contenido')

<div style="background-color:black"class="row">

    <div class="col-md-8 col-md-offset-2">
        <h1>Perfil de Usuario</h1>
        <br>
        <h2>Mis Pedidos</h2>
        @foreach($orders as $order)
        <div class="panel panel-default">
            <div class="panel-body">
            <ul class="list-group">
            <li>Fecha Pedido: {{$order->created_at}}</li>
           
<br>
            @foreach($order->cart->carrito as $key => $value)
            @if($key == 0 )
            <li>Producto : {{$value}}</li>
            @endif
            @if($key == 2 )
            <li>Precio Unitario:$ {{$value}}</li>
            @endif
            @if($key == 1 )
            <li>Cantidad : {{$value}}</li>
            @endif


            @if($key == 3 )
            <li>Producto : {{$value}}</li>
            @endif
            @if($key == 5 )
            <li>Precio Unitario:$ {{$value}}</li>
            @endif
            @if($key == 4 )
            <li>Cantidad : {{$value}}</li>
            @endif


            @if($key == 6 )
            <li>Producto : {{$value}}</li>
            @endif
            @if($key == 8 )
            <li>Precio Unitario:$ {{$value}}</li>
            @endif
            @if($key == 7 )
            <li>Cantidad : {{$value}}</li>
            @endif


            @if($key == 9 )
            <li>Producto : {{$value}}</li>
            @endif
            @if($key == 11 )
            <li>Precio Unitario:$ {{$value}}</li>
            @endif
            @if($key == 10 )
            <li>Cantidad : {{$value}}</li>
            @endif


            @if($key == 12 )
            <li>Producto : {{$value}}</li>
            @endif
            @if($key == 14 )
            <li>Precio Unitario:$ {{$value}}</li>
            @endif
            @if($key == 13 )
            <li>Cantidad : {{$value}}</li>
            @endif


            @if($key == 15 )
            <li>Producto : {{$value}}</li>
            @endif
            @if($key == 17 )
            <li>Precio Unitario:$ {{$value}}</li>
            @endif
            @if($key == 16 )
            <li>Cantidad : {{$value}}</li>
            @endif


            @if($key == 18 )
            <li>Producto : {{$value}}</li>
            @endif
            @if($key == 20 )
            <li>Precio Unitario:$ {{$value}}</li>
            @endif
            @if($key == 19 )
            <li>Cantidad : {{$value}}</li>
            @endif

            <!-- NUEVOS -->



           
            @if($key == 21 )
            <li>Producto : {{$value}}</li>
            @endif
            @if($key == 23 )
            <li>Precio Unitario:$ {{$value}}</li>
            @endif
            @if($key == 22 )
            <li>Cantidad : {{$value}}</li>
            @endif


            @if($key == 24 )
            <li>Producto : {{$value}}</li>
            @endif
            @if($key == 26 )
            <li>Precio Unitario:$ {{$value}}</li>
            @endif
            @if($key == 25 )
            <li>Cantidad : {{$value}}</li>
            @endif


            @if($key == 27 )
            <li>Producto : {{$value}}</li>
            @endif
            @if($key == 29 )
            <li>Precio Unitario:$ {{$value}}</li>
            @endif
            @if($key == 28 )
            <li>Cantidad : {{$value}}</li>
            @endif


            @if($key == 30 )
            <li>Producto : {{$value}}</li>
            @endif
            @if($key == 32 )
            <li>Precio Unitario:$ {{$value}}</li>
            @endif
            @if($key == 31 )
            <li>Cantidad : {{$value}}</li>
            @endif


            @if($key == 33 )
            <li>Producto : {{$value}}</li>
            @endif
            @if($key == 35 )
            <li>Precio Unitario:$ {{$value}}</li>
            @endif
            @if($key == 34 )
            <li>Cantidad : {{$value}}</li>
            @endif


            @if($key == 36 )
            <li>Producto : {{$value}}</li>
            @endif
            @if($key == 38 )
            <li>Precio Unitario:$ {{$value}}</li>
            @endif
            @if($key == 37 )
            <li>Cantidad : {{$value}}</li>
            @endif


            @if($key == 39 )
            <li>Producto : {{$value}}</li>
            @endif
            @if($key == 41 )
            <li>Precio Unitario:$ {{$value}}</li>
            @endif
            @if($key == 40 )
            <li>Cantidad : {{$value}}</li>
            @endif

            @endforeach
            <br>  
        </div>
            <div class="panel-footer"> 
            
            <li>Precio Total:$ {{$order->cart->total}}</li>
        
            </div>
            <br>
        </div>
        @endforeach

    </div>
</div>
@endsection
