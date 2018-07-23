@extends('layouts.app')

@section('content')

  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">
      <!-- Default form login -->
      <form method="POST" action="{{ route('productos.store') }}" enctype="multipart/form-data">
          @csrf
        <p class="h4 text-center mb-4">Nuevo Producto</p>

        <!-- Default input email -->
        <label for="nombre" class="grey-text">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control">

        <!-- Default input email -->
        <label for="u_medida" class="grey-text">Unidad de Medida</label>
        <input type="text" id="u_medida" name="u_medida" class="form-control">

        <!-- Default input email -->
        <label for="cantidad" class="grey-text">Cantidad</label>
        <input type="number" id="cantidad" name="cantidad" class="form-control">

        <!-- Default input email -->
        <label for="precio_venta_mayoreo" class="grey-text">Precio Mayoreo</label>
        <input type="number" id="precio_venta_mayoreo" name="precio_venta_mayoreo" class="form-control">

        <!-- Default input email -->
        <label for="precio_vente_menudeo" class="grey-text">Precio Menudeo</label>
        <input type="number" id="precio_vente_menudeo" name="precio_vente_menudeo" class="form-control">

        <!-- Default input email -->
        <label for="fecha_ingreso" class="grey-text">Fecha de Ingreso</label>
        <input type="date" id="fecha_ingreso" name="fecha_ingreso" class="form-control">

        <div class="form-group">
          <label for="imagen">Imagen Producto</label>
          <input type="file" class="imagen" name="imagen" id="imagen">
        </div>
        <br>
        

        <div class="text-center mt-4">
          <button class="btn btn-indigo" type="submit">Crear</button>
        </div>
      </form>
      <!-- Default form login -->
    </div>
  </main>


@endsection
