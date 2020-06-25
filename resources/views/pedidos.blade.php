
 @extends('layouts.plantilla')

 @section('contenido')


 @if (session('mensaje'))
     <div class="alert alert-warning">
         {{ session('mensaje') }}
     </div>
 @endif
<div class="container-fluid">


 <!--    $cart = Cart::all();
    $user = Auth::user(); -->

    @if((Auth::user()) && (Auth::user()->admin))


 
 
  <div class="card" style="width: 88rem; text-align:left";>

  @if(isset($compraCliente))
   @foreach($compraCliente as $caca)
    <div class="card-header">
   <p>??: {{$caca}}</p>
   
    </div>
    @endforeach
@endif

    <ul class="list-group list-group-flush">
      <li class="list-group-item"></li>
    </ul>
  </div>



  <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>











@endif



</div>
  @endsection
