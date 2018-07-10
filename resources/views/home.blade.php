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
  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('{{asset('img/FondoPortada2.png')}}'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container ">

        <!--Grid row-->
        {{-- <div class="row wow fadeIn "> --}}

          <!--Grid column-->
          <div class="col text-center text-md-left">
            <form action="{{route('piece.store')}}" method="post" style="padding-top: 800px;" enctype="multipart/form-data">
              @csrf
              <button type="button" class="btn btn-primary btn-block" onclick="document.getElementById('inputFile').click()">Agregar Imagen</button>
              <button class="btn btn-success btn-block" type="submit" name="button">Analizar</button>
              <div class="form-group inputDnD">
                <label class="sr-only" for="inputFile">File Upload</label>
                <input name="image" type="file" class="form-control-file text-primary font-weight-bold" id="inputFile" accept="image/*" onchange="readUrl(this)" data-title="Arrastra y suelta un archivo">
              </div>
            </form>
          </div>

          <!--Grid column-->

        {{-- </div> --}}
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
