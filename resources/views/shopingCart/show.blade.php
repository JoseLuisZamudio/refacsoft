@extends('layouts.app')

@section('content')

  <main class="mt-5 pt-4">
      <div class="container dark-grey-text mt-5">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="{{asset('images/products')}}/{{$producto->imagen}}" class="img-fluid" alt="">

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

              <form class="d-flex justify-content-left">
                <!-- Default input -->
                <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
                <button class="btn btn-primary btn-md my-0 p" type="submit">Add to cart
                  <i class="fa fa-shopping-cart ml-1"></i>
                </button>

              </form>

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
