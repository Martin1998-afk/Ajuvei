@extends('layouts.app')
@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/css/style-anuncio.css') }}">
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
<body>
  <div class="fondo">
  <div class=anuncio>
    <form id="contact" action="{{ url('prestamistas.store')}}" method="POST">
     @csrf
      Nombre/s:<br>
      <input type="text" name="nombre"><br>
      Correo Electrónico:<br>
      <input type="email" name="email"><br>
      Que servicio va a proveer?:<br>
      <select>
        @foreach ($services as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
      </select><br>
      {{-- Numero telefonico:<br>
      <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="(833)(***)(***)"><br> --}}
      Descripción: <br>
      <textarea name="descripcion"cols="auto" rows="4" placeholder="Describir su manera de trabajar"></textarea>
      <br>Dirección de su lugar de trabajo
      <br><textarea name="direccion" cols="auto" rows="4"></textarea><br>
      Codigo postal:<br>
      <input type="number" name="cp" min="5" max="10000"><br>
      <input class="boton btn btn-primary" type="submit" value="Registrar"> <br>
    </form>
  </div>
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
@endsection