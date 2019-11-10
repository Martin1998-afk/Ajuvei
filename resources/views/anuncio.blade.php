@extends('layouts.app')
@section('content')

<body>
  <div class=anuncio>
    <form action="" method="">
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
      <input type="text" name="descripcion" placeholder="Describir su manera de trabajar"><br>
      Dirección de su lugar de trabajo<br>
      Colonia:<br>
      <input type="text" name="colonia"><br>
      Calle:<br>
      <input type="text" name="calle"><br>
      Numero Exterior: <br>
      <input type="number" name="num"><br>
      Codigo postal:<br>
      <input type="number" name="cp" min="5" max="5"><br>
      <input type="submit" value="Registrar"> <br>
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
@endsection