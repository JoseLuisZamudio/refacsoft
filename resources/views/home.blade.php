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

.inputDnD .form-control-file {
  position: relative;
  width: 100%;
  height: 100%;
  min-height: 6em;
  outline: none;
  visibility: hidden;
  cursor: pointer;
  /* background-color: #c61c23; */
  box-shadow: 0 0 5px solid currentColor;
}
.inputDnD .form-control-file:before {
  content: attr(data-title);
  position: absolute;
  top: 0.5em;
  left: 0;
  width: 100%;
  min-height: 6em;
  line-height: 2em;
  padding-top: 1.5em;
  opacity: 1;
  visibility: visible;
  text-align: center;
  border: 0.25em dashed currentColor;
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  overflow: hidden;
}
.inputDnD .form-control-file:hover:before {
  border-style: solid;
  box-shadow: inset 0px 0px 0px 0.25em currentColor;
}

body {
  background-color: #f7f7f9;
}
</style>
@endsection

@section('content')
<div class="container mt-5 pt-4">
  <div class="col-4">
    <img src="img/logo2.png" class="img-fluid"/>
  </div>
  <div class="text-center mt-4 mb-3">
    <h1 class="text-danger font-weight-bold">
      INTELIGENCIA </h1>
      <h1 class="font-weight-bold d-inline">
        V  I  S  I  O  N </h1>
        <h1 class="text-primary font-weight-bold">
          REFACSOFT </h1>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <main class="text-center">
            <div class="text-center text-md-left">
              <form action="{{ route('piece.index') }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <button type="button" class="btn btn-primary btn-block mb-3" onclick="document.getElementById('inputFile').click()">Agregar Imagen</button>
                <button class="btn btn-success btn-block mb-2" type="submit" name="button">Analizar</button>
                <div class="form-group inputDnD">
                  <label class="sr-only" for="inputFile">File Upload</label>
                  <input name="image" type="file" class="form-control-file text-primary font-weight-bold mb-5 " id="inputFile" accept="image/*" onchange="readUrl(this)" data-title="Arrastra y suelta un archivo">
                </div>
              </form>
            </div>
          </main>
        </div>
        <div class="col-md-2"></div>
      </div>
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

      <script type="text/javascript">
      function readUrl(input) {

        if (input.files && input.files[0]) {
          let reader = new FileReader();
          reader.onload = (e) => {
            let imgData = e.target.result;
            let imgName = input.files[0].name;
            input.setAttribute("data-title", imgName);
            console.log(e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
        }

      }
      </script>
      @endsection
    </body>

    </html>
