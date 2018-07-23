@extends('layouts.app')

@section('content')

  <main class="mt-5 pt-3">
    <div class="container dark-grey-text mt-6">
      <h5 class="pt-5 pb-3">Shopping Cart table</h5>
      @if (session('notification'))
        <div class="alert alert-success">
          {{session('notification')}}
        </div>

      @endif

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-12 my-3 text-left">

          <div class="card">
            <div class="card-body">
              <p>Tienes {{auth()->user()->compra->detalles->count()}} productos en el carrito de compras.</p>
              <!-- Shopping Cart table -->
              <div class="table-responsive">

                <table class="table product-table">

                  <!-- Table head -->
                  <thead class="mdb-color lighten-5">
                    <tr>
                      <th></th>
                      <th class="font-weight-bold">
                        <strong>Articulo</strong>
                      </th>
                      <th class="font-weight-bold">
                        <strong>U.Medida</strong>
                      </th>
                      <th></th>
                      <th class="font-weight-bold">
                        <strong>Precio</strong>
                      </th>
                      <th class="font-weight-bold">
                        <strong>Cantidad</strong>
                      </th>
                      <th class="font-weight-bold">
                        <strong>Cuenta</strong>
                      </th>
                      <th></th>
                    </tr>
                  </thead>
                  <!-- /.Table head -->

                  <!-- Table body -->
                  <tbody>

                    @foreach (auth()->user()->compra->detalles as $detalle)

                      <!-- First row -->
                      <tr>
                        <th scope="row">
                          <img src="{{$detalle->producto->imagen}}" height="50" alt="" class="img-fluid z-depth-0">
                        </th>
                        <td>
                          <h5 class="mt-3">
                            <strong>{{$detalle->producto->nombre}}</strong>
                          </h5>
                        </td>
                        <td>{{$detalle->producto->u_medida}}</td>
                        <td></td>
                        <td>
                          @if ($detalle->cantidad < 10)
                            ${{$precio = $detalle->producto->precio_vente_menudeo}}
                          @else
                            ${{$precio = $detalle->producto->precio_venta_mayoreo}}
                          @endif
                        </td>
                        <td>
                          <input type="number" value="{{ $detalle->cantidad }}" aria-label="Search" class="form-control" style="width: 100px">
                        </td>
                        <td class="font-weight-bold">
                          <strong>{{ $detalle->cantidad * $precio}}</strong>
                        </td>
                        <td>
                          <a  class="btn btn-sm btn-primary" href="{{route('productos.show',$detalle->producto->id)}}" target="_blank">
                            <i class="fa fa-info ml-1"></i>
                          </a>

                          <form method="POST" action="{{route('delete')}}">
                            {!! csrf_field() !!}
                            {!! method_field('DELETE') !!}
                            <input type="hidden" name="articulo_id"  value="{{$detalle->id}}">
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
                          </div>
                        </form>
                      </td>
                    </tr>
                    <!-- /.First row -->
                  @endforeach
                  <!-- Second row -->
                </tbody>
                <!-- /.Table body -->
              </table>
            </div>
            <!-- /.Shopping Cart table -->
            <form action="{{ url('/pedido')}}" method="post">
              {!! csrf_field() !!}
              <button class="btn btn-success" type="submit" name="button"><i class="fa fa-credit-card"></i> Pagar</button>
            </form>
          </div>
        </div>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
</main>



@endsection
