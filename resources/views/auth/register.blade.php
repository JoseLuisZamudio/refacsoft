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
          <div class="col align-self-center text-center text-md-left">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-body">
                    <p class="h4 text-center py-4">{{ __('Register') }}</p>
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                      @csrf

                      <div class="md-form form-group">
                        <i class="fa fa-user prefix"></i>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        <label for="name">{{ __('Name') }}</label>

                        @if ($errors->has('name'))
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                          </span>
                        @endif
                      </div>

                      <div class="md-form form-group">
                        <i class="fa fa-envelope prefix"></i>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        <label for="email">{{ __('E-Mail Address') }}</label>

                        @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                          </span>
                        @endif
                      </div>

                      <div class="md-form form-group">
                        <i class="fa fa-lock prefix"></i>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        <label for="password">{{ __('Password') }}</label>

                        @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                          </span>
                        @endif
                      </div>

                      <div class="md-form form-group">
                        <i class="fa fa-lock prefix"></i>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                      </div>

                      <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

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
