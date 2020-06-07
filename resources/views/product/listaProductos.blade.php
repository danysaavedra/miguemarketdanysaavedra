@extends('layouts.plantilla')

@section('contenido')



<div class="container">

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

  <!-- buscador -->

  <form  class="buscador" action="" method="get">
    <div class="input-group mt-3">
      <input type="text" name="name" class="form-control" placeholder="¡QUE ESTÁS BUSCANDO??" aria-label="¡QUE ESTÁS BUSCANDO??" aria-describedby="basic-addon2">
          <div class="input-group-append">
              <button class="input-group-text" id="basic-addon2" type="submit"><i class="fas fa-search"></i></button>
          </div>
    </div>
  </form>


<h2 class="titulo-productos"><strong>Encontrá acá Todos tus Productos</strong></h2>

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="/productos/limp">Perfumería y Limpieza</a></li>
  <li class="breadcrumb-item"><a href="/productos/beb">Bebidas</a></li>
  <li class="breadcrumb-item"><a href="/productos/com">Comestibles</a></li>
</ol>

    <div class="row" id="div-papi">
@if(isset($productos))
      @foreach ($productos as $product)

          <div class="col-sm-4" id="div-producto{{$product->id}}">
            <div class="card mb-3">

                <div class="card-producto">
                  <div class="producto-hover">
                      <div class="producto-hover-content">
                        <form action="/productos/agregarCarrito" method="post">
                        @csrf
                        @if($product->stock > 0)

                        @if(Auth::user())
                          <button type="submit" class=""  name="product_id" value="{{$product->id}}"><i class="fas fa-cart-plus"></i></button>
                          @endif
                          <a href="/productos/detalles/{{$product->id}}"><i class="fas fa-search-plus"></i></a>

                          @else
                          <!-- <a href="/productos/detalles/{{$product->id}}"><i class="fas fa-search-plus"></i></a> -->
                            <strong >SIN STOCK</strong> <br>
                          <ion-icon style='color:white' name="alert-outline"></ion-icon>

                          @endif

                    </div>
                </div>
                  <img src="/storage/{{$product->avatar}}" alt="">

              </div>
              <div class="titulo">
                  <a href="/productos/detalles/{{$product->id}}"><h5>{{$product->name}}</h5></a>
                  <p style="color:black; font-size:1em"><em> @if($product->stock > 0)
                        Cuántos querés?         <input style="text-align:center;margin-left: 5%;width:10%"type="number" min =1  name="quantity" placeholder="0" required>
                    @endif <br> Precio: $ {{$product->price}} </em></p>

              </div>
              </form>
                </div>
              </div>

            <div class="modal fade" id="producto{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">

                  <form class="modal-eliminar" id="form-{{$product->id}}" action="/productos/delete/{{$product->id}}" method="post">
                  @csrf
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Seguro querés eliminar este producto?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="color: black;">
                      {{$product->name}}
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>

                      <input type="hidden" name="id" value="{{$product->id}}">
                      <input type="submit" class="btn btn-danger" name="" value="Borrar Producto">
                    </div>
                  </form>

                </div>
              </div>
            </div>
      @endforeach
{{$productos->links()}}
@endif
    </div>
    <script src="../js/botonarriba.js"></script>
    <script src="../js/librerias.js"></script>
    <script src="../js/products.js"></script>
</div>


@endsection
