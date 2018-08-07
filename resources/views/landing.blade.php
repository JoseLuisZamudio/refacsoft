@extends('layouts.app')

@section('extra-css')
<style type="text/css">html,
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
  }</style>
  @endsection

  @section('content')
  <div class="view full-page-intro" style="background-image: url('img/FondoPortada2.png'); background-repeat: no-repeat; background-size: cover;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row wow fadeIn align-middle">
          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">
            <h1 class="display-4 font-weight-bold"><img src="img/logo2.png"></h1>
            <hr class="hr-light">
            <p>INTELIGENCIA, VISION, PRESICION</p>
            Encuentra la pieza que le falta a tu automovil electrico a un precio justo y en la puerta de tu casa
            <br>
            <a href="#" class="btn btn-indigo btn-lg">Pruebalo ahora!<i class="fa fa-graduation-cap ml-2"></i></a>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5">
            <h2 class="text-white font-weight-bold font-italic">
              Conocenos </h2>
              <div class="row">
                <div class="col-md-2">
                  <img src="{{asset('img/Diana.jpeg')}}" class="rounded-circle img-fluid">
                </div>
                <div class="col-md-10 font-weight-bold text-left align-middle">
                  <h3 class="text-white text-capitalize">Garcia Sanchez Diana Laura</h3>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-2">
                  <img src="{{asset('img/Baruc.png')}}" class="rounded-circle img-fluid">
                </div>
                <div class="col-md-10 font-weight-bold text-left align-middle">
                  <h3 class="text-white">Gines Jimenez Jonathan Baruc</h3>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-2">
                  <img src="{{asset('img/Octavio.png')}}" class="rounded-circle img-fluid">
                </div>
                <div class="col-md-10 font-weight-bold text-left align-middle">
                  <h3 class="text-white">Ramirez Cruz Luis Octavio</h3>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-2">
                  <img src="{{asset('img/Roberto.png')}}" class="rounded-circle img-fluid">
                </div>
                <div class="col-md-10 font-weight-bold text-left align-middle">
                  <h3 class="text-white">Rodriguez Soto Jose Roberto Ivan</h3>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-2">
                  <img src="{{asset('img/Irving.jpeg')}}" class="rounded-circle img-fluid">
                </div>
                <div class="col-md-10 font-weight-bold text-left align-middle">
                  <h3 class="text-white">Vazquez Barron Irving Ernesto</h3>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-2">
                  <img src="{{asset('img/Zamudio.jpeg')}}" class="rounded-circle img-fluid">
                </div>
                <div class="col-md-10 font-weight-bold text-left align-middle">
                  <h3 class="text-white">Zamudio Rivera Jose Luis </h3>
                </div>
              </div>
              <!--Card-->
              <!--/.Card-->
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
    <!--Main layout-->
    <main>
      <div class="container">
        <!--Section: Main info-->
        <section class="mt-5 wow fadeIn">
        </section>
        <!--Section: Main info-->
        <hr class="my-5">
        <!--Section: Main features & Quick Start-->
        <section>
          <h3 class="h3 text-center mb-5">Sobre Nosotros</h3>
          <!--Grid row-->
          <div class="row wow fadeIn">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 px-4">
              <!--First row-->
              <div class="row">
                <div class="col-11">
                  <h5 class="feature-title font-weight-bold">Mision</h5>
                  <p class="text-justify">Ofrecer un servicio informático profesional, comprometido y altamente responsable con la pequeña y mediana empresa, aportándole la confianza, seguridad y tranquilidad necesaria al adquirir soluciones de calidad a un precio razonable.
                    Otorgar respeto y alta calidad de servicio a nuestros clientes, excediendo sus expectativas y proporcionando una atención personalizada, generando y ofreciendo productos competitivos y con tecnología vanguardista. </p>
                  </div>
                </div>
                <!--/First row-->
                <div style="height:30px"></div>
                <!--Second row-->
                <!--/Second row-->
                <div style="height:30px"></div>
                <!--Third row-->
                <!--/Third row-->
              </div>
              <!--/Grid column-->
              <!--Grid column-->
              <div class="col-lg-6 col-md-12">
                <p class="h5 text-center mb-4">Mira nuestro comercial</p>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="{{asset('img/refacsoft.mp4')}}" allowfullscreen></iframe>
                </div>
              </div>
              <!--/Grid column-->
            </div>
            <!--/Grid row-->
          </section>
          <!--Section: Main features & Quick Start-->
          <hr>
          <section>
            <h3 class="h3 text-center mb-5">Vision</h3>
            <!--Grid row-->
            <div class="row wow fadeIn">
              <!--Grid column-->
              <!--/Grid column-->
              <!--Grid column-->
              <div class="col-lg-6 col-md-12">
                <div class="embed-responsive embed-responsive-16by9">
                  <img class="embed-responsive-item" src="{{asset('img/equipo.jpeg')}}" allowfullscreen></img>
                </div>
              </div>
              <!--/Grid column-->
              <div class="col-lg-6 col-md-12 px-4">
                <!--First row-->
                <div class="row">
                  <div class="col-11">
                    <h5 class="feature-title font-weight-bold">Vision</h5>
                    <p>Refacsoft aspira a ser la empresa líder a nivel nacional en desarrollo de programas informáticos especializados en vehículos eléctricos, empresa en constante crecimiento, comprometida con la más alta calidad en sus productos y con el cuidado del medio ambiente.  </p>
                  </div>
                </div>
                <!--/First row-->
                <div style="height:30px"></div>
                <!--Second row-->
                <!--/Second row-->
                <div style="height:30px"></div>
                <!--Third row-->
                <!--/Third row-->
              </div>
            </div>
            <!--/Grid row-->
          </section>
        </div>
      </main>
      <!--Main layout-->
      <!--Footer-->
      <footer class="page-footer text-center font-small mt-4 wow fadeIn">
        <!--Call to action-->
        <div class="pt-4">
          <a class="btn btn-outline-white" href="https://mdbootstrap.com/getting-started/" target="_blank" role="button">Download MDB <i class="fa fa-download ml-2"></i> </a>
          <a class="btn btn-outline-white" href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank" role="button">Start free tutorial <i class="fa fa-graduation-cap ml-2"></i> </a>
        </div>
        <!--/.Call to action-->
        <hr class="my-4">
        <!-- Social icons -->
        <div class="pb-4">
          <a href="https://www.facebook.com/mdbootstrap" target="_blank"> <i class="fa fa-facebook mr-3"></i> </a>
          <a href="https://twitter.com/MDBootstrap" target="_blank"> <i class="fa fa-twitter mr-3"></i> </a>
          <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank"> <i class="fa fa-youtube mr-3"></i> </a>
          <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank"> <i class="fa fa-google-plus mr-3"></i> </a>
          <a href="https://dribbble.com/mdbootstrap" target="_blank"> <i class="fa fa-dribbble mr-3"></i> </a>
          <a href="https://pinterest.com/mdbootstrap" target="_blank"> <i class="fa fa-pinterest mr-3"></i> </a>
          <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank"> <i class="fa fa-github mr-3"></i> </a>
          <a href="http://codepen.io/mdbootstrap/" target="_blank"> <i class="fa fa-codepen mr-3"></i> </a>
        </div>
        <!-- Social icons -->
        <!--Copyright-->
        <div class="footer-copyright py-3">
          © 2018 Copyright:
          <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a>
        </div>
        <!--/.Copyright-->
      </footer>
      @endsection

      @section('extra-script')
      <script type="text/javascript">
      // Animations initialization
      new WOW().init();
      </script>
      @endsection
    </body>

    </html>
