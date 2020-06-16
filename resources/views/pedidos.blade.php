
 @extends('layouts.plantilla')

 @section('contenido')


 @if (session('mensaje'))
     <div class="alert alert-warning">
         {{ session('mensaje') }}
     </div>
 @endif

 <div class="container-fluid">


 <div class="card" style="width: 88rem; text-align:left";>
   @foreach($detalles as $usuario)
   <div class="card-header">
{{$usuario->name}} {{$usuario->lastname}}
   </div>


   <ul class="list-group list-group-flush">
     <li class="list-group-item"></li>
   </ul>
   @endforeach

 </div>



 </div>
  @endsection
