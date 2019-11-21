<!DOCTYPE html>
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
    <link rel="stylesheet" href="{{ asset('css/css/detalles-anuncio.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
</head>

<body style="background-color:#e8e7e6">
    <header style="background-color:white" class="site-navbar js-sticky-header site-navbar-target" role="banner">

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
  
  <div class="todo">
      <div class="card">
        <img class="card-img-top myimg" src="{{ asset('css/images/pp1.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Prof. Adolfo Gibson Md</h5>
          <p class="card-text">Possimus a neque tempora fugit. Nemo rerum ducimus doloremque quia vel dolore ut. Nemo veniam molestiae et in possimus facere. Non saepe sint sed alias.}</p>
          <a href="#" class="btn btn-primary">Actualizar</a>
         
        </div>
      </div>
  
    <div class="carousel">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 imgc" src="{{ asset('css/images/tubo.jpg') }}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 imgc" src="{{ asset('css/images/tubo2.jpg') }}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 imgc" src="{{ asset('css/images/tubo.jpg') }}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  
    <div class="map-comments">
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
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>