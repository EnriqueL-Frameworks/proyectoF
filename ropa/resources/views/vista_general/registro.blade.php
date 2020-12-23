
@extends('layout.menu1')
@section('content')







    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />
    </head>

    
    <body background="../imagenes/fon.jpg">
    <div class="container">

        <div class="starter-template">
        <br>
        <br>
        <br>
        <div class ="row">
        <div class="col-md-4 col-md-offset-4">

        <br>
    <br>


       <div class="panel panel-default">
           <div class="panel-body">


    <form  action="registroCode.php" method="POST" role="form">
        <legend>Registro de usuarios</legend>

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" REQUIRED name="txtNombre"  class="form-control" id="nombre"
             autofocus requiered placeholder="Ingresa tu nombre">
        </div>

        <div class="form-group">
            <label for="email">Correo electronico</label>
            <input type="email" REQUIRED name="txtEmail" class="form-control" id="email"
            requiered placeholder="Ingresa tu correo">
        </div>
        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="text" REQUIRED name="txtUsuario" class="form-control" id="usuario" autofocus requiered placeholder="usuario">
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" REQUIRED name="txtPassword" class="form-control" id="password" placeholder="*******">
        </div>

        <div class="form-group">
            <label for="foto">Imagen de usuario</label>
            <input type="file" name="txtFoto" class="form-control" id="foto" >
        </div>


        <button type="submit" class="btn btn-success">Registrar  </button>
        <a href="/login">         Iniciar sesión</a>
    </form>


           </div>
       </div>




        </div>
      </div>
        </div>
      </div>



</html>

<footer>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="http://ERM.com/"> ERM.com</a>
    </div>
    <!-- Copyright -->

  </footer>






@endsection