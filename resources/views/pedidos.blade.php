
 @extends('layouts.plantilla')

 @section('contenido')


<div class="container-fluid">

 @if (session('mensaje'))
     <div class="alert alert-warning">
         {{ session('mensaje') }}
     </div>
 @endif

 <!--    $cart = Cart::all();
    $user = Auth::user(); -->

@if(isset($cart))
    <div class="card-deck">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  
 
  <div class="card-body">
@foreach($cart as $carts) 
    <h5 style="color:black" class="card-title">{{var_dump($carts->user_id)}} </h5>
    <p style="color:black"class="card-text"></p>
@endforeach
  </div>

</div>
</div>
@endif
  


</div>
  @endsection
