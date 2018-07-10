@extends('layouts.app')

@section('extra-css')
  <style type="text/css">
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
  </style>
@endsection

@section('content')
  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('{{asset('img/FondoPortada2.png')}}'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 text-center text-md-left">
            <img src="{{asset('img/logo2.png')}}" class="img-fluid">

            <hr class="hr-light">

            <p>
              <strong>INTELIGENCIA, VISIÓN, PRESICIÓN</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>Encuentra la pieza que le falta a tu automóvil eléctrico a un precio justo y en la puerta de tu casa.</strong>
            </p>

            <a href="{{ route('register') }}" class="btn btn-indigo btn-lg">¡Pruebalo ahora!
              <i class="fa fa-graduation-cap ml-2"></i>
            </a>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->
@endsection

@section('extra-script')
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
@endsection
</body>

</html>
