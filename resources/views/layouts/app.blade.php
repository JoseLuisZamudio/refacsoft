<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @section('css')
      <!-- Fonts -->
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <!-- Bootstrap core CSS -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    @show
    @yield('extra-css')
</head>
<body>
    <div id="app">
        <main>
            @include('layouts.partials.menuSuperior')
            @yield('content')
        </main>
    </div>

    @section('script')
      <!-- SCRIPTS -->
      <!-- JQuery -->
      <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    @show
    @yield('extra-script')

</body>
</html>
