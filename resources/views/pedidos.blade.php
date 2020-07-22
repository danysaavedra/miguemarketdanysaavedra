@extends('layouts.plantilla')
@section('contenido')
<div class="container">
    <h1>Perfil de Usuario</h1>
        <br>
        <h2>Mis Pedidos</h2>
            <div class="card-group">
                @foreach($orders as $order)
                    <div class="card text-black bg-info mb-3" style="max-width: 18rem; display-content:space-beetwwen">
                        <h5 class="card-title">Fecha Pedido: <br> {{$order->created_at}}</h5>
                        @foreach($order->cart->carrito as $key => $value)
                        <ul class="list-group list-group-flush">

                            @if($key == 0 ) <li class="list-group-item">Producto : {{$value}} </li> @endif
                            @if($key == 1 ) <li class="list-group-item">Precio Unitario:$ {{$value}} </li> @endif
                            @if($key == 2 )<li class="list-group-item">Cantidad : {{$value}} </li> @endif

                            @if($key == 3 )<li class="list-group-item">Producto : {{$value}}</li>@endif
                            @if($key == 4 )<li class="list-group-item">Precio Unitario:$ {{$value}}</li>@endif
                            @if($key == 5 )<li class="list-group-item">Cantidad : {{$value}}</li>@endif

                            @if($key == 6 )<li class="list-group-item">Producto : {{$value}}</li>@endif
                            @if($key == 7 )<li class="list-group-item">Precio Unitario:$ {{$value}}</li>@endif
                            @if($key == 8 )<li class="list-group-item">Cantidad : {{$value}}</li>@endif

                            @if($key == 9)<li class="list-group-item">Producto : {{$value}}</li>@endif
                            @if($key == 10 )<li class="list-group-item">Precio Unitario:$ {{$value}}</li>@endif
                            @if($key == 11 )<li class="list-group-item">Cantidad : {{$value}}</li>@endif

                            @if($key == 12 )<li class="list-group-item">Producto : {{$value}}</li>@endif
                            @if($key == 13 )<li class="list-group-item">Precio Unitario:$ {{$value}}</li>@endif
                            @if($key == 14 )<li class="list-group-item">Cantidad : {{$value}}</li>@endif

                            @if($key == 15 )<li class="list-group-item">Producto : {{$value}}</li>@endif
                            @if($key == 16 )<li class="list-group-item">Precio Unitario:$ {{$value}}</li>@endif
                            @if($key == 17 )<li class="list-group-item">Cantidad : {{$value}}</li>@endif

                            @if($key == 18 )<li class="list-group-item">Producto : {{$value}}</li>@endif
                            @if($key == 19 )<li class="list-group-item">Precio Unitario:$ {{$value}}</li>@endif
                            @if($key == 20 )<li class="list-group-item">Cantidad : {{$value}}</li>@endif

                            @if($key == 21 )<li class="list-group-item">Producto : {{$value}}</li>@endif
                            @if($key == 22 )<li class="list-group-item">Precio Unitario:$ {{$value}}</li>@endif
                            @if($key == 23 )<li class="list-group-item">Cantidad : {{$value}}</li>@endif

                            @if($key == 24 )<li class="list-group-item">Producto : {{$value}}</li>@endif
                            @if($key == 25 )<li class="list-group-item">Precio Unitario:$ {{$value}}</li>@endif
                            @if($key == 26 )<li class="list-group-item">Cantidad : {{$value}}</li>@endif

                            @if($key == 27 )<li class="list-group-item">Producto : {{$value}}</li>@endif
                            @if($key == 28 )<li class="list-group-item">Precio Unitario:$ {{$value}}</li>@endif
                            @if($key == 29 )<li class="list-group-item">Cantidad : {{$value}}</li>@endif

                            @if($key == 30 )<li class="list-group-item">Producto : {{$value}}</li>@endif
                            @if($key == 31 )<li class="list-group-item">Precio Unitario:$ {{$value}}</li>@endif
                            @if($key == 32 )<li class="list-group-item">Cantidad : {{$value}}</li>@endif

                            @if($key == 33 )<li class="list-group-item">Producto : {{$value}}</li>@endif
                            @if($key == 34 )<li class="list-group-item">Precio Unitario:$ {{$value}}</li>@endif
                            @if($key == 35 )<li class="list-group-item">Cantidad : {{$value}}</li>@endif

                            @if($key == 36 )<li class="list-group-item">Producto : {{$value}}</li>@endif
                            @if($key == 37 )<li class="list-group-item">Precio Unitario:$ {{$value}}</li>@endif
                            @if($key == 38 )<li class="list-group-item">Cantidad : {{$value}}</li>@endif

                            @if($key == 39 )<li class="list-group-item">Producto : {{$value}}</li>@endif
                            @if($key == 40 )<li class="list-group-item">Precio Unitario:$ {{$value}}</li>@endif
                            @if($key == 41 )<li class="list-group-item">Cantidad : {{$value}}</li>@endif
                        </ul>
                            @endforeach
                            <br>
                            <div class="card-footer"><small class="text-muted">Precio Total:$ {{$order->cart->total}}</small></div>
                    </div>
                @endforeach
            </div>
        <br>
</div>
@endsection
