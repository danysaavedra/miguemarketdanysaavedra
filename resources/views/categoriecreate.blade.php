@extends('layouts.plantilla')

@section('contenido')

<section class="principal">
     <article class="nuevas" id="peliculas">
         <div class="peliculas">

    <div class="form-header">
      <h2 style="color:black;" class="form-title">C<span>rear</span> C<span>ategoria</span> </h2>
    </div>
    <div class="contenedor">

      <!-- BUSCADOR -->
      <form class="form-inline pull-right" action="" method="get">
          <div class="form-group">
              Buscador de Categorias:
              <input type="text" name="name" value="" class="form-control">
              <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
      </form>

     @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
     @endif
<!-- BUSCADOR -->

      <form class="formulariogrande" id="formCreate" action="/categoriecreate" method="post" enctype="multipart/form-data">
       @csrf

        <label for="name">Nombre</label>
        <div class="">
        <input type="text" name="name" id="name" value="{{old('name')}}"><br>
          @error('name')
          <span class="alert alert-danger">
            <strong>{{ $message }}</strong>
          </span>
           @enderror <br>
        </div>

       <label for="imagen">IMAGEN</label>
       <div class="">
       <input type="file" name="imagen" id="imagen" value="{{old('imagen')}}"><br>
       @error('imagen')
       <span class="alert alert-danger">
         <strong>{{ $message }}</strong>
       </span>
      @enderror <br>
      </div>

@if(isset($subcategorias))
      <label for="subcategories">Subcategorias</label>
      <select class="form-control" name="sub_category_id">
        @foreach ($subcategorias as $subcategoria)
        <option value="{{$subcategoria->id}}"> {{$subcategoria->name}} </option>
        @endforeach
         </select>
         @endif


        <button onclick="alert('El producto fue creado correctamente.')"  type="submit" class="btn btn-success">Crear Categoria</button>

      </form>
    </div>
</div>
</article>
</section>

@endsection
