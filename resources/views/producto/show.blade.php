@extends('layouts.app')

@section('content')

  <main class="mt-5 pt-4">
      <div class="container dark-grey-text mt-5">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            {{-- <img src="{{asset('images/products')}}/{{$producto->imagen}}" class="img-fluid" alt=""> --}}
            <img src="{{$producto->imagen}}" class="img-fluid" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!--Content-->
            <div class="p-4">

              <div class="mb-3">
                <a href="">
                  <span class="badge purple mr-1">Category 2</span>
                </a>
                <a href="">
                  <span class="badge blue mr-1">New</span>
                </a>
                <a href="">
                  <span class="badge red mr-1">Bestseller</span>
                </a>
              </div>

              <p class="lead">
                <span class="mr-1">
                  Menudeo: ${{$producto->precio_vente_menudeo}}
                </span>
                <span>
                  Mayoreo: ${{$producto->precio_venta_mayoreo}}</span>
              </p>

              <p class="lead font-weight-bold">{{$producto->nombre}}</p>

              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia ipsa sint voluptatibus!
                Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>


                <button class="btn btn-primary btn-md my-0 p" data-toggle="modal" data-target="#modalAddToCart">Añadir al carrito
                  <i class="fa fa-shopping-cart ml-1"></i>
                </button>

                <div class="modal fade" id="modalAddToCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-notify modal-info" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <p class="heading lead">Añadir producto al carrito de compras</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                      </div>
                      <form method="POST" action="{{ url('/shopingCart') }}">
                        {!! csrf_field() !!}
                        <div class="modal-body">
                          <div class="text-center">
                            <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                            <p>Seleccione la cantidad que desea agregar</p>
                            <input type="number" name="cantidad" value="1" class="form-control">
                            <input type="hidden" name="producto_id" value="{{$producto->id}}">
                            <input type="hidden" name="precio_mayoreo" value="{{$producto->precio_venta_mayoreo}}">
                            <input type="hidden" name="precio_menudeo" value="{{$producto->precio_vente_menudeo}}">
                          </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                          <button type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No, cancelar</button>
                          <button type="submit" class="btn btn-info">Si, añadir al carrito</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

            </div>
            <!--Content-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr>


      </div>
    </main>
    <!--Main layout-->

@endsection
