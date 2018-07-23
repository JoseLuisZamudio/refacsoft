@extends('layouts.print')

@section('content')

<div class="row text-center my-5">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

    <!-- Card -->
    <div class="card">

      <!-- Content -->
      <div class="card-body">

        <!-- Offer -->
        <div class="d-flex justify-content-center">
          <div class="card-circle d-flex justify-content-center align-items-center">
            <i class="fa fa-shopping-cart indigo-text fa-5x"></i>
          </div>
        </div>

        <!--Price -->
        <div class="ticket">
        <p class="centrado">TICKET DE VENTA<br>MEXQUIMICOS.<br></p>
          <table class="table">
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
            <tbody>
              <?php $sum = 0; ?>
              @foreach ($cart as $key => $venta)
                {{-- expr --}}
                <tr>
                  <th scope="row">{{$venta->id}}</th>
                  <td>{{$venta->nombre}}</td>
                  <td>{{$venta->precio}}</td>
                  <td>{{$venta->cantidad}}</td>
                  <td>{{$venta->cantidad * $venta->precio}}</td>
                  <td>{{$venta->created_at}}</td>
                  <?php $sum += $venta->cantidad * $venta->precio; ?>
                </tr>
              @endforeach
              <tr>
                <td></td>
                <td>TOTAL</td>
                <td>{{ $sum }}</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="text-center">

          <button class="btn btn-primary btn-round oculto-impresion" onclick="imprimir()">
            Imprimir ticket
          </button>
          <a href="{{ url('/home') }}" class="btn btn-primary btn-round oculto-impresion">Regresar</a>

        </div>
      </div>
      <!-- Content -->
    </div>
    <!-- Card -->
  </div>
  <!-- Grid column -->
</div>

<script>
function imprimir() {
  window.print();
}
</script>

@endsection
