<!doctype html>
<html lang="en">

<head>
  <title>AJUVEI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/css/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/css/aos.css') }}">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{ asset('css/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/css/style-personas.css') }}">

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
            <a href="{{ url('/') }}" class="text-black"><span class="text-primary">AJUVEI</a>
          </div>

          <div class="col-12">
            <nav class="site-navigation text-right ml-auto " role="navigation">

              <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li><a href="index.html" class="nav-link">Inicio</a></li>
                <li><a href="index.html" class="nav-link">¿Quienes somos?</a></li>


                <li>
                  <a href="index.html" class="nav-link">Servicios</a>

                </li>
                <button id="inicio-registro" type="button" class="btn btn-outline-primary">Registro/Iniciar</button>
              </ul>

            </nav>

          </div>

          <div class="toggle-button d-inline-block d-lg-none"><a href="#"
              class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>

    <div id="personas-mapa">
        <div id="personas">
        <form id = "contact" action="" method="POST">
          @csrf
         
        <div class="card" style="width: 45rem;">
            <div id="imagen-persona">
            <img src="{{ asset('css/images/pp2.jpg') }}" class="card-img-top" alt="...">
            <p>$$$</p>
        </div>
            <div class="card-body">
            <h5 class="card-title">Fulano 1</h5>
            <p class="card-text">Opos Oponimus  </p>
            <a href="{{ view('detalles-anuncio') }}" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
        
      @foreach ($prestamistas as $renglon ) 

        <div class="card" style="width: 45em;">
        <div id="imagen-persona">
        <img src="{{ asset('css/images/pp1.jpg') }}" class="card-img-top" alt="...">
        <p>$$$</p>
        </div>
        <div class="card-body">
        <h5 class="card-title">{{$renglon->name}}</h5>
        <p class="card-text">{{$renglon->description}}} </p>
          <a href="{{url("/detalles-anuncio/{id}")}}" class="btn btn-primary">Go somewhere</a>
          <form>
          {{ csrf_field('DELETE') }}
          <input class="btn btn-danger" type="submit" value="Eliminar Anuncio">
          </form>
        </div>
      </div>
      @endforeach
      <div class="card" style="width: 45rem;">
        <div id="imagen-persona">
            <img src="{{ asset('css/images/pp.jpg') }}" class="card-img-top" alt="...">
            <p>$$$</p>
        </div>
        <div class="card-body">
          <h5 class="card-title">Fulano 3</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis suscipit reprehenderit numquam </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
          </form>
    </div>
    
    <div class="mapa">
        <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118153.93589804425!2d-97.93952600110909!3d22.266225138406092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d7fd8bfcfe2d1f%3A0xc3189ac39db089e6!2sTampico%2C+Tamps.!5e0!3m2!1ses-419!2smx!4v1564684402103!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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

  <script src="{{ asset('css/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('css/js/popper.min.js') }}"></script>
  <script src="{{ asset('css/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('css/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('css/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('css/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('css/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('css/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('css/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('css/js/aos.js') }}"></script>

  <script src="{{ asset('css/js/main.js') }}"></script>


</body>

</html>