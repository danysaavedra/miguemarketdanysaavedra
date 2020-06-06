@extends('layouts.plantilla')

@section('contenido')

<div class="container">
@if(isset($categorias))

    @foreach($categorias as $categoria)
    @if($categoria->name=="Higiene Personal"||$categoria->name=="Superficies y Pisos"||$categoria->name=="Repelentes"||$categoria->name=="Ropa"||$categoria->name=="Varios")
    <a href="/productos/com"
    class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Comestibles</a>
    <a href="/productos/beb" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Bebidas</a>
    @elseif($categoria->name=="Con Alcohol"||$categoria->name=="Sin Alcohol")
    <a href="/productos/com"
    class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Comestibles</a>
    <a href="/productos/limp"
    class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Perfumería y Limpieza</a>
    @else($categoria->name=="Fiambres y Quesos"||$categoria->name=="Aceites y Vinagres"||$categoria->name=="Dulces y Mermeladas"||$categoria->name=="Condimentos y Aderezos"||$categoria->name=="Galletitas"||$categoria->name=="Infusiones y Endulzantes"||$categoria->name=="Conservas y Legumbres"||$categoria->name=="Rebozadores"||$categoria->name=="Harinas y Premezclas"||$categoria->name=="Arroz"||$categoria->name=="Fideos"||$categoria->name=="Snacks"||$categoria->name=="Repostería"||$categoria->name=="Lácteos"||$categoria->name=="Panes"||$categoria->name=="Cereales"||$categoria->name=="Congelados")

    <a href="/productos/beb" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Bebidas</a>
    <a href="/productos/limp"
    class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Perfumería y Limpieza</a>
    @endif
    @endforeach

@endif



@foreach($categorias as $categoria)
@if($categoria->name=="Higiene Personal"||$categoria->name=="Superficies y Pisos"||$categoria->name=="Repelentes"||$categoria->name=="Ropa"||$categoria->name=="Varios")
    <h1 class="titulo-productos"><strong>Perfumería y Limpieza</strong></h1>
@elseif($categoria->name=="Con Alcohol"||$categoria->name=="Sin Alcohol")
  <h1 class="titulo-productos"><strong>Bebidas</strong></h1>
    @else($categoria->name=="Fiambres y Quesos"||$categoria->name=="Aceites y Vinagres"||$categoria->name=="Dulces y Mermeladas"||$categoria->name=="Condimentos y Aderezos"||$categoria->name=="Galletitas"||$categoria->name=="Infusiones y Endulzantes"||$categoria->name=="Conservas y Legumbres"||$categoria->name=="Rebozadores"||$categoria->name=="Harinas y Premezclas"||$categoria->name=="Arroz"||$categoria->name=="Fideos"||$categoria->name=="Snacks"||$categoria->name=="Repostería"||$categoria->name=="Lácteos"||$categoria->name=="Panes"||$categoria->name=="Cereales"||$categoria->name=="Congelados")
    <h1 class="titulo-productos"><strong>Comestibles</strong></h1>
    @endif
@endforeach
@foreach($categorias as $categoria)
<h2>{{$categoria->name}}</h2>
@endforeach

@if(isset($categorias))
  <div class="dropdown">

    @foreach($categorias as $categoria)

    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
     aria-haspopup="true" aria-expanded="false">
      {{$categoria->name}}
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      @if($categoria->name=="Con Alcohol"||$categoria->name=="Sin Alcohol")
      <a class="dropdown-item" href="/productos/detallesSub/beb/alcohol">Con Alcohol</a>
      <a class="dropdown-item" href="/productos/detallesSub/beb/sinAlcohol">Sin Alcohol</a>

      @elseif($categoria->name=="Higiene Personal"||$categoria->name=="Superficies y Pisos"||$categoria->name=="Repelentes"||$categoria->name=="Ropa"||$categoria->name=="Varios")
      <a class="dropdown-item" href="/productos/detallesSub/limp/higiene">Higiene Personal</a>
      <a class="dropdown-item" href="/productos/detallesSub/limp/super">Superficies y Pisos</a>
      <a class="dropdown-item" href="/productos/detallesSub/limp/repelentes">Repelentes</a>
      <a class="dropdown-item" href="/productos/detallesSub/limp/ropa">Ropa</a>
      <a class="dropdown-item" href="/productos/detallesSub/limp/varios">Varios</a>
      @else

      <a class="dropdown-item" href="/productos/detallesSub/com/fiambresQuesos">Fiambres y Quesos</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/aceites">Aceites y Vinagres</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/dulces">Dulces y Mermeladas</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/condimentos">Condimentos y Aderezos</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/galletitas">Galletitas</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/infusiones">Infusiones y Endulzantes</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/conservas">Conservas y Legumbres</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/rebozadores">Rebozadores</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/arroz">Arroz</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/fideos">Fideos</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/snacks">Snacks</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/reposteria">Repostería</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/lacteos">Lácteos</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/panes">Panes</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/cereales">Cereales</a>
      <a class="dropdown-item" href="/productos/detallesSub/com/congelados">Congelados</a>
      @endif
      @endforeach
      @endif
    </div>
  </div>




    @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif

    @if(isset($categorias))
    <div class="row" id="div-papi">
      @foreach($categorias as $categoria)
      @foreach ($categoria->products as $product)

          <div class="col-sm-4" id="div-producto{{$product->id}}">
            <div class="card mb-3">

                <div class="card-producto">
                  <div class="producto-hover">
                      <div class="producto-hover-content">
                          <form action="/productos/agregarCarrito" method="post">
                          @csrf
                            <button type="submit" class=""  name="product_id" value="{{$product->id}}"><i class="fas fa-cart-plus"></i></button>
                            <a href="/productos/detalles/{{$product->id}}"><i class="fas fa-search-plus"></i></a>
                          </form>
                      </div>
                  </div>
                  <img src="/storage/{{$product->avatar}}" alt="">

                </div>
                <div class="titulo">
                    <a href="/productos/detalles/{{$product->id}}"><h5>{{$product->name}}</h5></a>
                    <p><em>Precio: $ {{$product->price}} </em></p>
                </div>
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
      @endforeach
    </div>
@endif

</div>


@endsection
