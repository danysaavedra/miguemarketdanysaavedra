@extends('layouts.plantilla')

@section('contenido')

<div class="container-fluid">


<div class="containerCarroPapa" >
  <a class="ir-arriba"  javascript:void(0) title="Volver arriba">
    <span class="fa-stack">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
    </span>
  </a>

  @if (session('mensaje'))
      <div class="alert alert-warning">
          {{ session('mensaje') }}
      </div>
  @endif

@if(isset($detalles))
  <div class="carrito">
    <h2 class="miCarrito">Este es tu Carrito {{Auth::user()->name}}</h2>
        <a href="/listaProductos">Seguir Comprando</a>
              <?php $suma = 0; ?>
              @foreach($detalles as $detalle)


      <form class="" action="/carrito/sacarCarrito" method="post">
          @csrf
          <br>
        <div class="card-group">
          <div class="card" id="boton-sacarCarrito">
            <div class="card-body">
              <button class="btn btn-outline-danger" type="submit" name="detalle_id" value="{{$detalle->id}}"><strong>X</strong> </button>
            </div>
          </div>
      </form>

        <div class="card">
            <div class="card-body" id="avatar-carrito" style="max">
            <img src="storage/{{$detalle->avatar}}" alt="">
          </div>
        </div>
        <div class="card" id="prodcuto-nombre" >
          <div class="card-body">
          <p class="card-text"><small class="text-muted">{{$detalle->name}}</small></p>
        </div>
        </div>
        <div class="card" id="producto-precio">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Precio por Unidad:  ${{$detalle->price}}</small></p>
          </div>
        </div>
        <div class="card" id="producto-precio">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Seleccionados: {{$detalle->pivot->quantity}}<br>Subtotal: ${{$detalle->price * $detalle->pivot->quantity }}</small></p>
          </div>
        </div>
      </div>
  
<?php  
$subtotal[]= $detalle->price * $detalle->pivot->quantity;
 $suma = array_sum($subtotal);
?>
@endforeach
@endif
@if(isset($detalles))
<form action="/pedidos" method="post">
@csrf

<input type="hidden" value='{{Auth::user()->name}}' name="name">
<input type="hidden" value="{{Auth::user()->lastname}}" name="lastname">
<input type="hidden" value="{{Auth::user()->domicilio}}" name="domicilio">
<input type="hidden" value="{{Auth::user()->nro}}" name="nro">
<input type="hidden" value='{{Auth::user()->dto}}' name="dto" >
<input type="hidden" value='{{Auth::user()->piso}}' name="piso" >
<input type="hidden" value='{{Auth::user()->localidad}}' name="localidad" >
<input type="hidden" value='{{Auth::user()->partido}}' name="partido"> 
<input type="hidden" value='{{Auth::user()->calle1}}' name="calle1" >
<input type="hidden" value='{{Auth::user()->calle2}}' name="calle2" >
<input type="hidden" value='{{Auth::user()->tel1}}' name="tel1" >
<input type="hidden" value='{{Auth::user()->tel2}}' name="tel2" > 

@foreach($detalles as $detalle)

<input type="hidden" value='{{$detalle->name}}' name="producto">
<input type="hidden" value='{{$detalle->price}}' name="precio">
<input type="hidden" value='{{$detalle->pivot->quantity}}' name="cantidad">
<input type="hidden" value='{{$detalle->price * $detalle->pivot->quantity}}' name="total">


<input type="hidden" value="strtotime( string $time [, int $now = time() ]): int" name='fecha_pedido'>

@endforeach


<div class="card text-black bg-primary mb-3">
  <div  class="total-carrito" >
    <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Total Del Carrito</strong></li>
      <li class="list-group-item">SUBTOTAL: ${{$suma}}</li>
      <li class="list-group-item">ENVÍO:(ACA SE PODRIA CALCULAR..)</li>
      <li class="list-group-item"> <strong>TOTAL: ${{$suma}}</strong></li>
      <li class="list-group-item">
         <strong>

           <button id="finalizar" type="submit" name="" value="">Finalizar compra</button>

         </strong>

       </li>
    </ul>

  </div>


</div>
</form>
@endif
<script src="/js/botonarriba.js"></script>
<script src="/js/librerias.js"></script>
<script src="/js/products.js"></script>
   @endsection
