@extends('layouts.app')

@section('content')

  <main class="mt-5 pt-4">
    @if (session('notification'))
      <div class="alert alert-success">
        {{session('notification')}}
      </div>

    @endif
    <div class="container dark-grey-text mt-5">
      {{-- <a href="{{route('ventas.create')}}" class="btn btn-outline-primary waves-effect btn-lg float-right">Agregar</a> --}}
        <a href="{{url('/pdf')}}" class="btn btn-primary">Imprimir pdf</a>
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



@endsection
