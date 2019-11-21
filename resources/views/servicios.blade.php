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
      @foreach ($prestamistas as $renglon ) 

        <div class="card" style="width: 45em;">
        <div id="imagen-persona">
        <img src="{{ asset('css/images/pp1.jpg') }}" class="card-img-top" alt="...">
        <p>$$$</p>
        </div>
        <div class="card-body">
        <h5 class="card-title">{{$renglon->name}}</h5>
        <p class="card-text">{{$renglon->description}}} </p>
          <a href="{{url("/detalles-anuncio/{id}")}}" class="btn btn-primary">Perfil</a>

          <form action="/anuncio/5" method="POST">
            @method('DELETE')
            @csrf
        <button class="btn btn-danger" type="submit">Eliminar Anuncio</button>
</form>
        </div>
      </div>
      @endforeach
      
          </form>
    </div>   
    <div id="map">
      <script>
      function iniciarMap() {
        var coord = { lat: 22.2448406, lng: -97.8351974 };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: coord
        });
        var marker = new google.maps.Marker({
          position: coord,
          map: map
        });
      }
      </script>
      <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap">
      </script>
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