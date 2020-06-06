@extends('layouts.plantilla')

@section('contenido')



<div class="container-fluid">

<!-- buscador -->
<a class="ir-arriba"  javascript:void(0) title="Volver arriba">
  <span class="fa-stack">
    <i class="fa fa-circle fa-stack-2x"></i>
    <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
  </span>
</a>

<form  class="buscador" action="/listaProductos" method="get">
  <div class="input-group mt-3">
    <input type="text" name="name" class="form-control" placeholder="¿¿QUE ESTÁS BUSCANDO??" aria-label="¿¿QUE ESTÁS BUSCANDO??" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="input-group-text" id="basic-addon2" type="submit"><i class="fas fa-search"></i></button>
        </div>
  </div>
</form>

<!-- primer carrusel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/carrB.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/img/bannEnv.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/img/bannMar.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="row">
    <div class="col-12 " id="inf" >
       <h1 class="elh1">Migue Market</h1>
      <h3 class="elh3MP">Podés pagar con</h3>
    </div>

  </div>

 <!-- promo -->
  <section id="productosDestacados">
    <div class="titulo-productos">

        <h3>NUESTRAS PROMOCIONES<br> Semana del 3/6 al 15/6</h3>
      <hr>
    </div>


@if(isset($productos))
    <div data-slick='{"slidesToShow": 5, "slidesToScroll": 5}' class="center">
        @foreach ($productos as $producto)
        @if($producto->promo === 1 && $producto->stock > 0)
      <div style="text-align:center">

        <ion-icon style='color:rgba(0, 150, 0 ,0.5);' name="checkmark-done-outline"></ion-icon><img class="productoPromo"src="/storage/{{$producto->avatar}}"alt="">
        <a href='/listaProductos?name={{$producto->name}}'>
      <strong>{{$producto->name}}</strong>
      <br>
      <strong>${{$producto->price}}</strong>
      </a>
      </div>
      @elseif($producto->promo === 1 && $producto->stock === 0)
      <div style="text-align:center">
        <strong style='color:rgba(150, 0, 0 ,0.5);padding:auto;'>SIN STOCK</strong> <br>
     <img class="productoPromo"src="/storage/{{$producto->avatar}}"alt="">
      <a href='/listaProductos?name={{$producto->name}}'>
      <strong>{{$producto->name}}</strong>
      <br>
      <strong>${{$producto->price}}</strong>
      <br>
      <strong>${{$producto->price}}</strong>
      </a>
    </div>

      @endif
      @endforeach
    </div>
      @endif



  </section>




    <!-- Perfu y Limpieza -->
    <section id="productosDestacados">
      <div class="titulo-productos">

          <h3>Perfumería y Limpieza</h3>
        <hr>
      </div>
      @if(isset($productos))
          <div class="container-productos">
            @foreach ($productos as $producto)
            @if($producto->category->dameSubCategoria() == 'Perfumería y Limpieza')
            @if($loop->odd)
            <article class="producto">

              <a href='/listaProductos?name={{$producto->name}}'>
                <div class="producto-hover">
                    <div class="producto-hover-content">


                          @if($producto->stock == 1)
                          <ion-icon style='color:rgba(0, 150, 0 ,0.5);' name="checkmark-done-outline"></ion-icon>
                          @else
                          <strong style='color:rgba(200 ,0 ,0 ,0.7); font-size:2rem;'>Sin Stock</strong>
                        <br>
                            <ion-icon style='color:rgba(200 ,0 ,0 ,0.7);font-size:2.5rem;' name="alert-outline"></ion-icon>
                            @endif

                    </div>
                </div>
                </a>
              <strong>{{$producto->name}}</strong>
              <br>
              <a href='/listaProductos?name={{$producto->name}}'>
                <img src="/storage/{{$producto->avatar}}"alt="">
              </a>
              <br>
              <p>{{$producto->description}}</p>
              <br>
              <strong>${{$producto->price}}</strong>
                <br>


          </article>

            @endif
            @endif
            @endforeach

          @endif
    </section>
    <div class="verMas">


    <a href='/productos/limp'> <button type="button" class="btnon">Ver Más</button></a>
    </div>
    <!-- Elegi como hacer tus compras en tu SuperMigue -->


    <section id="sobreNosotros">
      <div class="botonventaA">

      <div class="celeste">

        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
          <strong>COMPRA INMEDIATA</strong>
            <div class="info">
            <img src="img/truck.png" alt="">
            <p ><strong>Envio a domicilio</strong> </p>
            </div>
          </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
              <strong>COMPRA INMEDIATA</strong>
              <div class="info">
                <img src="img/canasta.png" alt="">
              <p>Mas de<strong>500</strong>productos disponibles</p>
              </div>
            </div>
        </div>

        <div class="celesteA">
          <div class="col-6 col-sm-6 col-md-6 col-lg-6">
            <strong>COMPRA INMEDIATA</strong>
            <div class="infoA">
              <img src="img/venticu.png" alt="">
            <p >Tu pedido listo a las <strong>24hr.</strong> </p>
            </div>
          </div>

          <div  class="col-6 col-sm-6 col-md-6 col-lg-6">
            <strong>COMPRA INMEDIATA</strong>
            <div class="infoA">
              <img src="img/carro.png" alt="">
            <p>Más de 100 productos con<br><strong>stock garantizado</strong> </p>
            </div>
          </div>
        </div>

    </div>
    </section>
  <!-- seccion comestible -->
  <section id="productosDestacados">
    <div class="titulo-productos">

        <h3>Galletitas</h3>
      <hr>
    </div>
    @if(isset($productos))
        <div class="container-productos">
          @foreach ($productos as $producto)
          @if($producto->category->dameSubCategoria() == 'Comestibles' && $producto->dameCategoria() == 'Galletitas')
          @if($loop->odd)
          <article class="producto">

            <a href='/listaProductos?name={{$producto->name}}'>
              <div class="producto-hover">
                  <div class="producto-hover-content">


                        @if($producto->stock == 1)
                        <ion-icon style='color:rgba(0, 150, 0 ,0.5);' name="checkmark-done-outline"></ion-icon>
                        @else
                        <strong style='color:rgba(200 ,0 ,0 ,0.7); font-size:2rem;'>Sin Stock</strong>
                      <br>
                          <ion-icon style='color:rgba(200 ,0 ,0 ,0.7);font-size:2.5rem;' name="alert-outline"></ion-icon>
                          @endif

                  </div>
              </div>
              </a>

            <strong>{{$producto->name}}</strong>
            <br>
            <a href='/listaProductos?name={{$producto->name}}'>
              <img src="/storage/{{$producto->avatar}}"alt="">
            </a>
            <br>
            <p>{{$producto->description}}</p>
            <br>
            <strong>${{$producto->price}}</strong>
              <br>

        </article>
          @endif
          @endif
          @endforeach

        @endif
          </div>

</section>
<div class="verMas">


<a href='/productos/detallesSub/com/galletitas'> <button type="button" class="btnon">Ver Más</button></a>
</div>


    <section id="sobreNosotros2">
      <h3>-las calles estan vacias...<br>TE LO LLEVAMOS A TU CASA!-</h3>
      <p>Envíos sin cargo hasta 3km.(consulte Zona)<strong>
      </strong>
    <img src="img/carro.png" alt="">

    </section>

    <div  class="barra">
      <div class="row-barra">
        <div class="col-12 col-sm-2 col-md-2 col-lg-1" id="relativo">
          <a href="/cajaBlanca#cuotas" id="enlace"></a>
          <img class="creditcard" src="/img/mercPag.png" alt="">
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-2" id="relativo">
          <a href="/cajaBlanca#cuotas" id="enlace"></a>
          <p class="texto1">¡MERCADO PAGO!</p>
          <p class="texto2">Para todas tus compras</p>
        </div>

        <div class="col-12 col-sm-2 col-md-2 col-lg-1" id="relativo">
          <a href="/cajaBlanca#envio" id="enlace"></a>
          <img class="delivery" src="/img/truck.png" alt="">
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-2" id="relativo">
          <a href="/cajaBlanca#envio" id="enlace"></a>
          <p class="texto1">ENVIOS A DOMICILIO</p>
          <p class="texto2">¡Rápido,sin vueltas!</p>
        </div>

        <div class="col-12 col-sm-2 col-md-2 col-lg-1" id="relativo">
          <a href="/cajaBlanca#retira" id="enlace"></a>
          <img class="location" src="/img/barbijo.png" alt="">
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-2" id="relativo">
          <a href="/cajaBlanca#retira" id="enlace"></a>
          <p class="texto1">¡PREVENCIÓN COVID-19!</p>
          <p class="texto2">Cumplimos requerimientos <br>
             sanitarios y de higiene</p>
        </div>

        <div class="col-12 col-sm-2 col-md-2 col-lg-1" id="relativo">
          <a href="/cajaBlanca#compra" id="enlace"></a>
          <img class="ok" src="/img/ok.png" alt="">
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-2" id="relativo">
          <a href="/cajabBlanca#compra"  id="enlace"></a>
          <p class="texto1">COMPRA 100% SEGURA</p>
          <p class="texto2">Garantias Oficiales</p>
        </div>
      </div>
    </div>

</div>

   <script type="text/javascript" src="js/slide.js"></script>
<script src="js/botonarriba.js"></script>

@endsection
