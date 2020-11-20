<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


        h2 {
            color: rgb(230, 107, 0);
        }
        body {font-family: Arial, Helvetica, sans-serif;}

        table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            font-size: 12px;    margin: 45px;     width: 480px; text-align: left;    border-collapse: collapse; }

        th {     font-size: 13px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
            border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

        td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
            color: #669;    border-top: 1px solid transparent; }

        tr:hover td { background: #d0dafd; color: #339; }

        </style>
</head>
<body>
<div class="container home">

<strong>PEDIDO N°: {{$infoparaadmin->id}} </strong>
    ,
    <strong>Fecha y Hora: {{date_format($infoparaadmin->created_at,"d/m/y g:i a")}} </strong>
    <br>
    <strong>Cliente : {{$infoparaadmin->dameUsuario()->name}},{{$infoparaadmin->dameUsuario()->lastname}} </strong>
    ,
    <strong>Domicilio: {{$infoparaadmin->dameUsuario()->domicilio}}, {{$infoparaadmin->dameUsuario()->nro}}
    </strong>
    @if($infoparaadmin->dameUsuario()->dto && $infoparaadmin->dameUsuario()->piso)
    <strong>
    Dto: {{$infoparaadmin->dameUsuario()->dto}} ,   Piso: {{$infoparaadmin->dameUsuario()->piso}}</strong>
    ,
    @endif
    <strong>Localidad y Partido: {{$infoparaadmin->dameUsuario()->localidad}}, {{$infoparaadmin->dameUsuario()->partido}} </strong>
    <br>
    <strong>Entre Calles: {{$infoparaadmin->dameUsuario()->calle1}} y {{$infoparaadmin->dameUsuario()->calle2}} </strong>
    <br>
    <strong>Teléfonos de contacto: {{$infoparaadmin->dameUsuario()->tel1}} , {{$infoparaadmin->dameUsuario()->tel2}} </strong>

<table id="data_table" class="table table-striped">

        <thead>
            <tr>
            <th>Producto</th>
            <th>Precio Unitario</th>
            <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @if($infoparaadmin->cart->carrito)
            @for($x=0;$x < sizeof($infoparaadmin->cart->carrito);$x++)
            @if($x%3 == 0)
<tr>

<td>{{$infoparaadmin->cart->carrito[$x]}} </td>

@endif

@if($x%3 == 0+1)

<td>${{$infoparaadmin->cart->carrito[$x]}} </td>

@endif

@if($x%3 == 0+2)

<td>{{$infoparaadmin->cart->carrito[$x]}}U.</td>

@endif
@endfor

@endif
</tr>

<td> </td>
<td> </td>
<td>  <strong>Total del Pedido: $ {{$infoparaadmin->cart->total}}</strong>  </td>



        </tbody>

    </table>
    <h2>Super Market</h2>
<li><strong>WhatsApp +54 11 3091 7451</strong></li>
<li><strong>Ramos Mejia|Bs As|Argentina</strong></li>
<li><strong>© Copyright 2020. Todos los derechos reservados. Migue Market S.A</strong></li>
</div>





</body>
</html>