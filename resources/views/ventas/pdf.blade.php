<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/app.css">
</head>
<body>
  <div class="container">


    <main class="mt-5 pt-4">
      <div class="container dark-grey-text mt-5">
        {{-- <a href="{{route('ventas.create')}}" class="btn btn-outline-primary waves-effect btn-lg float-right">Agregar</a> --}}

        <!--Table-->
        <table class="table table-hover">

          <!--Table head-->
          <thead>
            <tr>
              <th>#</th>
              <th>Producto</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Total</th>
              <th>Fecha de pedido</th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
            @foreach ($ventas as $venta)
              <tr>
                <th scope="row">{{$venta->id}}</th>
                <td>{{$venta->nombre}}</td>
                <td>{{$venta->precio}}</td>
                <td>{{$venta->cantidad}}</td>
                <td>{{$venta->cantidad * $venta->precio}}</td>
                <td>{{$venta->created_at}}</td>

              </tr>
            @endforeach
          </tbody>
          <!--Table body-->
        </table>
        <!--Table-->
        <div class="row">
          {{-- {{$productos->links()}} --}}
        </div>
      </div>

    </main>

  </div>
</body>
</html>
