@extends('layouts.plantilla')

@section('contenido')
<div class="container productos">
  <form action="" method="post" enctype="multipart/form-data">

    @csrf

    <div class="form-group">

      <label for="name"> Nombre del Producto a Editar:</label>

      <ul>
        <li> {{$producto->name}} </li>
      </ul>
      Escriba nuevo name: <input type="text" class="form-control" id="name" placeholder="Escribí el nombre del producto" value="{{old('name', $producto->name)}}" name="name">
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>


    <div class="form-group">
      <label for="name">Descripcion de Producto a Editar:</label>
      <ul>
        <li> {{$producto->description}} </li>
      </ul>

      <label for="description">Escriba Nueva descripción del producto:</label>
      <input type="text-area" class="form-control" id="description" placeholder="Descripción del producto" value="{{old('description', $producto->description)}}" name="description">
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="name">Precio del Producto a Editar:</label>

      <ul>
        <li> {{$producto->price}} </li>
      </ul>
      <label for="price">Nuevo precio:</label>
      <input type="number" step=".01" class="form-control" id="price" placeholder="Precio del producto" value="{{old('price', $producto->price)}}" name="price">
      @error('price')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="name">Stock a Editar:</label>

      <ul>
        <li> {{$producto->stock}} </li>
      </ul>
      <label for="price">Nuevo Stock:</label>
      <input type="number" class="form-control" id="stock" placeholder="escriba stock" value="{{old('stock', $producto->stock)}}" name="stock">
      @error('stock')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="name">promo a Editar:</label>

      <ul>
        <li> {{$producto->promo}} </li>
      </ul>
      <label for="promo">Nuevo promo:</label>
      <input type="number" class="form-control" id="promo" placeholder="escriba promo" value="{{old('promo', $producto->stock)}}" name="promo">
      @error('promo')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="avatar">Cambiar imagen :</label>

      <input type="file" id="avatar" name="avatar">
      @error('avatar')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div> <br>

    <button type="submit" class="btn btn-primary">Editar</button>
  </form>

</div>

@endsection