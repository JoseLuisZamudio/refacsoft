<section>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">
        <strong>REFACSOFT</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/home') }}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <!-- Authentication Links -->
          @guest
          <li class="nav-item">
            <a href="{{ route('register') }}" class="nav-link border-light rounded">
              <i class="fa fa-twitter"></i>Register
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link border border-light rounded">
              <i class="fa fa-github mr-2"></i>Login
            </a>
          </li>
          @else
            <li class="nav-item">
              <a href="#" class="nav-link">
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>


        @endguest
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

</section>
