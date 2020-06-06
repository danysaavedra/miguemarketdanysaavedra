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

    <h2 class="miCarrito">Mi Carrito</h2>
        <a href="/listaProductos">Seguir Comprando</a>
              <?php
                   $suma = 0;
                    ?>
              @foreach($detalles as $detalle)
              <form class="" action="/carrito/sacarCarrito" method="post">
              @csrf
            <br>
            <div class="card-group">

                          <div class="card" id="boton-sacarCarrito">
                            <div class="card-body">
                            <button class="btn btn-outline-danger" type="submit" name="detalle_id" value="{{$detalle->id}}"> <strong>X</strong> </button>
                          </div>
                          </div>
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
                  <p class="card-text"><small class="text-muted">Seleccionados: {{$detalle->pivot->quantity}} <br> Subtotal:  ${{$detalle->price * $detalle->pivot->quantity }} </small></p>
                </div>
              </div>
            </div>
    </form>

<?php  $subtotal[]= $detalle->price * $detalle->pivot->quantity;
 $suma = array_sum($subtotal);
?>
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


<!-- <div class="total-carrito"class="card-body text-dark" class="h-50 d-block" class="width:80%;">
  <ul class="list-group list-group-horizontal">

    <li class="list-group-item"><h5 style='color:black'  class="card-title">Total:</h5></li>
    <li class="list-group-item" ><strong>${{$suma}}</strong></li>
  </ul>
  <button style="margin-bottom: 20px;" type="submit" name="" value="">Finalizar compra</button>
</div> -->
</div>
  @endif
  </div>
</div>



<script src="/js/botonarriba.js"></script>
<script src="/js/librerias.js"></script>
<script src="/js/products.js"></script>
   @endsection
