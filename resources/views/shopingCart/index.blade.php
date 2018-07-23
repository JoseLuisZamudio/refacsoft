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
              <p>Tienes {{auth()->user()->cuenta->detalles->count()}} productos en el carrito de compras.</p>
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
                    <?php $sum = 0; ?>
                    @foreach (auth()->user()->cuenta->detalles as $detalle)

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
                        <td>${{ $detalle->precio }}</td>
                        <td>{{ $detalle->cantidad }}</td>
                        <td class="font-weight-bold">
                          <strong>${{ $detalle->cantidad * $detalle->precio}}</strong>
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
                    <?php $sum += $detalle->precio * $detalle->cantidad; ?>
                  @endforeach
                  <tr class="text-right">
                                      <td></td>
                                      <td><h3>TOTAL ${{ $sum }}</h3></td>
                                      
                                    </tr>
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
