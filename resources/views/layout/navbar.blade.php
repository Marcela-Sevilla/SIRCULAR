<!-- ======= Header ======= -->
<header id="header" class="header sticky-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <img src="assets/img/logo-sircular.png" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="nav-link scrollto" href="{{route('Sircular')}}">Inicio</a></li>

          <li class="dropdown"><a href="/#PrincipiosEconom&Aacute;aCircular"><span>Econom&iacute;a Circular</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul class="shadow-sm">
              <li><a href="/#Funcionamientos">Funcionamientos</a></li>
              <li><a href="/#SectorAgua">Sector Agua</a></li>
              <li><a href="{{route('RevolucionCircular')}}">Revoluci&oacute;n Circular</a></li>
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="/#TemasInteres">Temas de Interes</a></li>
          @if (Auth::user())
            <li><a class="nav-link scrollto" href="{{route('PuntosRecoleccion')}}">Puntos de Recolecci&oacute;n</a></li>
          @endif
          <li><a class="nav-link scrollto" href="/#contact">Contactanos</a></li>
         
          @if (Auth::user())
            <li><a class="btn-getstarted scrollto d-lg-none ms-3" href="{{route('logout')}}">Salir <i class="fa-solid fa-power-off"></i></a></li>                  
          @else
            <li><a class="btn-getstarted scrollto d-lg-none ms-3" href="{{route('Login')}}">Acceder</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      @if (Auth::user())
        <a class="btn-getstarted scrollto d-none d-lg-block shadow-sm" href="{{route('logout')}}">Salir <i class="fa-solid fa-power-off"></i></a>              
      @else
        <a class="btn-getstarted scrollto d-none d-lg-block shadow-sm" href="{{route('Login')}}">Acceder</a>
      @endif

    </div>
</header><!-- End Header -->

@yield('navbar')