@extends('layouts.plantilla')

@section('contenido')


@if (session('mensaje'))
    <div class="alert alert-warning">
        {{ session('mensaje') }}
    </div>
@endif

<div class="container-fluid">

@if(isset($detalles))
<div class="card" style="width: 88rem; text-align:left";>

  <div class="card-header">
    {{Auth::user()->name  }} {{Auth::user()->lastname}}
  </div>

  <ul class="list-group list-group-flush">
    @foreach($detalles as $detalle)
    <li class="list-group-item">{{$detalle->name}} Precio: ${{$detalle->price}} Seleccionados: {{$detalle->pivot->quantity}} Subtotal:  ${{$detalle->price * $detalle->pivot->quantity }} </li>
    @endforeach
  </ul>

</div>


@endif
</div>
 @endsection
