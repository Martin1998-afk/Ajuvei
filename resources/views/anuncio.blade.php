<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/fonts/icomoon/style.css">

<link rel="stylesheet" href="css/css/bootstrap.min.css">
<link rel="stylesheet" href="css/css/jquery.fancybox.min.css">
<link rel="stylesheet" href="css/css/owl.carousel.min.css">
<link rel="stylesheet" href="css/css/owl.theme.default.min.css">
<link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="../css/aos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css/style.css">
    <link rel="stylesheet" href="css/css/style-anuncio.css">
    <title>Registro de Prestamista</title>
</head>

<body>
<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">


          <div class="site-logo">
            <a href="index.php" class="text-black"><span class="text-primary">AJUVEI</a>
          </div>

          <div class="col-12">
            <nav class="site-navigation text-right ml-auto " role="navigation">
              <form action="">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  @guest
                  @if (Route::has('register'))
                  <a href="{{ route('login') }}" class="btn btn-primary btn-lg" role="button"
                    aria-pressed="true">Iniciar
                    sesión</a>
                  <a class="btn btn-primary btn-lg" role="button" aria-pressed="true"
                    href="{{ route('register') }}">Registrarse</a>
                  @endif
                  @else
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                        Cerrar sesion
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </div>
                  </li>
                  @endguest
                </ul>
              </form>
            </nav>

          </div>

          <div class="toggle-button d-inline-block d-lg-none"><a href="#"
              class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>
    <div class=anuncio>
    <form>
        Nombre/s:<br>
        <input type="text" name="nombre"><br>
        Apellido Paterno:<br>
        <input type="text" name="apellidoP"><br>
        Apellido Materno:<br>
        <input type="text" name="apellidoM"><br>
        Correo Electrónico:<br>
        <input type="email" name="email"><br>
        Que servicio va a proveer?:<br>
        <select>
            <option value="1">Plomero</option>
            <option value="2">Electricista</option>
            <option value="3">Pintor</option>
            <option value="4">Cerrajero</option>
            <option value="5">Carpinteria</option>
        </select><br>
        Numero telefonico:<br>
        <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="(833)(***)(***)"><br>
        Descripción: <br>
        <input type="text" name="descripcion"placeholder="Describir su manera de trabajar"><br>
        Dirección de su lugar de trabajo<br>
        Colonia:<br>
        <input type="text" name="colonia"><br>
        Calle:<br>
        <input type="text" name="calle"><br>
        Numero Exterior: <br>
        <input type="number" name="num"><br>
        Codigo postal:<br>
        <input type="number" name="cp"min="5" max="5"><br>
        <input type="submit"value="Registrar"> <br>
    </form>
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