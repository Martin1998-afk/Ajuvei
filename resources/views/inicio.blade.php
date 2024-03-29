<!doctype html>
<html lang="es">

<head>
  <title>AJUVEI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="../css/aos.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



  <div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">


          <div class="site-logo">
            <a href="index.php" class="text-black"><span class="text-primary">AJUVEI</a>
          </div>

          <div class="col-12">
            <nav class="site-navigation text-right ml-auto " role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Inicio</a></li>
                <li><a href="#about-section" class="nav-link">¿Quienes somos?</a></li>


                <li>
                  <a href="#services-section" class="nav-link">Servicios</a>

                </li>

                @guest
                @if (Route::has('register'))
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Iniciar
                  sesión</a>
                <a class="btn btn-primary btn-lg" role="button" aria-pressed="true"
                  href="{{ route('register') }}">Registrarse</a>
                @endif
                @else
                <a href="{{ route('service.create') }}" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Crear
                  anuncio</a>
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </li>
                @endguest
              </ul>
            </nav>

          </div>

          <div class="toggle-button d-inline-block d-lg-none"><a href="#"
              class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>

    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('css/images/plomero.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-6">
              <h1>Encuentra profesionales de confianza:</h1>
              <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus dolorem eius eligendi
                esse quod?</p>
              <div id="buscador">
                <div class="form-group d-flex">
                  <!-- Example single danger button -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      ¿Que servicio buscas?
                    </button>
                    <div class="dropdown-menu">
                      @foreach ($services as $service)
                      <a class="dropdown-item"
                        href="{{ route('service.show',['id'=>$service->id]) }}">{{ $service->name }}</a>
                      @endforeach
                    </div>
                  </div>
                  <a href="{{ route('anuncio.index') }}" class="btn btn-primary btn-lg active" role="button"
                    aria-pressed="true">Buscar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END .ftco-cover-1 -->
      <div class="site-section ftco-service-image-1 pb-5">
        <div class="container">
          <div class="owl-carousel owl-all">
            <div class="service text-center">
              <a href="#"><img src="css/images/1.jpg" alt="Image" class="img-fluid"></a>
              <div class="px-md-3">
                <h3><a href="#">Servicios para el hogar</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae distinctio laudantium nulla eos
                  numquam incidunt!</p>
              </div>
            </div>
            <div class="service text-center">
              <a href="#"><img src="css/images/2.jpg" alt="Image" class="img-fluid"></a>
              <div class="px-md-3">
                <h3><a href="#">Electricistas</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae distinctio laudantium nulla eos
                  numquam incidunt!</p>
              </div>
            </div>
            <div class="service text-center">
              <a href="#"><img src="css/images/3.jpg" alt="Image" class="img-fluid"></a>
              <div class="px-md-3">
                <h3><a href="#">Servicios de grúas</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae distinctio laudantium nulla eos
                  numquam incidunt!</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>





    <div class="site-section" id="about-section">

      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <h2>¿Quienes somos?</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptate magnam aut explicabo sapiente labore molestiae libero beatae
                sed alias nam praesentium dolorum ut, aperiam officiis dolores dolore dolor eaque tempora!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row justify-content-center mb-4 block-img-video-1-wrap">
          <div class="col-md-12 mb-5">
            <figure class="block-img-video-1" data-aos="fade">
              <a href="..." data-fancybox data-ratio="2">
                <span class="icon"><span class="icon-play"></span></span>
                <img src="css/images/depot_delivery_1.jpg" alt="Image" class="img-fluid">
              </a>
            </figure>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <div class="block-heading-1">
              <h2>Servicios</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                blind texts.</p>
            </div>
          </div>
        </div>
        <div class="owl-carousel owl-all">
          @foreach ($services as $service)
          <div class="block__35630 text-center">
            <div class="icon mb-0">
              <span class="flaticon-ferry"></span>
            </div>
            <h3 class="mb-3">{{ $service->name }}</h3>
            <p>{{ $service->description }}</p>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-7">
                <h2 class="footer-heading mb-4">Más</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptate debitis voluptatum et dolorum.
                </p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Contenido</h2>
                <ul class="list-unstyled">
                  <li><a href="#">¿Quienes somos?</a></li>
                  <li><a href="#">Servicios</a></li>
                  <li><a href="#">Registro/inicio</a></li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-4 ml-auto">




            <h2 class="footer-heading mb-4">Contacto</h2>
            <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>
      </div>
    </footer>

  </div>

  <script src="css/js/jquery-3.3.1.min.js"></script>
  <script src="css/js/popper.min.js"></script>
  <script src="css/js/bootstrap.min.js"></script>
  <script src="css/js/owl.carousel.min.js"></script>
  <script src="css/js/jquery.sticky.js"></script>
  <script src="css/js/jquery.waypoints.min.js"></script>
  <script src="css/js/jquery.animateNumber.min.js"></script>
  <script src="css/js/jquery.fancybox.min.js"></script>
  <script src="css/js/jquery.easing.1.3.js"></script>
  <script src="css/js/aos.js"></script>

  <script src="css/js/main.js"></script>


</body>

</html>