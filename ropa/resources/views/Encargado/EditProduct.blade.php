
<!doctype html>
<html lang="en">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Encargado</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/product/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
  </head>
  <body>
    <nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="/anonimo" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="/Encargado/RestContra">Restablecer Contraseña</a>
    <a class="py-2 d-none d-md-inline-block" href="/Encargado/BusquedaProductos">Productos</a>
    <a class="btn btn-outline-primary" href="#">Cerrar Sesion</a>

  </div>
</nav>

<br>





<div id="content">
            <section class="p-y3">
              <div class="container">
                <div class="row">
                  <div class="col-lg-9">
                    <h1 class="font-weight-bold mb-0">Encargado </h1>
                  </div>
                  <div class="col-lg-3 d-flex">
                  </div>
                </div>
              </div>

            </section>
            <section class="bg-mix">
              <div class="container">
                <div class="card rounded-0">
                  <div class="card-body">
                      <h4> Editar Producto </h4>
 <form>
<br>
<div class="form-group">
    <label for="exampleInputEmail1">ID Del Producto</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>



 <div class="form-group">
    <label for="exampleInputEmail1">Nombre Del Producto</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

<br>
<div class="form-group">
    <label for="exampleInputEmail1">Descripcion Del Producto</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

<br>
 <form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Selecciona una imagen</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
<br>
  <br>
  <form class="form-inline">
  <div class="form-group mb-2">
  <label for="exampleInputEmail1">Precio Del Producto</label>
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="txt" class="form-control" id="inputPassword2" placeholder="Cantidad en Pesos">
  </div>
</form>
<br>
<div class="mb-3">
    <div class="input-group is-invalid">
      <div class="input-group-prepend">
        <label class="input-group-text" for="validatedInputGroupSelect"> Categoria </label>
      </div>
      <select class="custom-select" id="validatedInputGroupSelect" required>
        <option value=""> Dama </option>
        <option value="1"> Caballero </option>
        <option value="2">  Niño</option>
        <option value="3"> Accesorios </option>
      </select>
    </div>
    <div class="invalid-feedback">

<br>
<br>
  <div class="mb-3">
    <div class="input-group is-invalid">
      <div class="input-group-prepend">
        <label class="input-group-text" for="validatedInputGroupSelect"> Unidades </label>
      </div>
      <select class="custom-select" id="validatedInputGroupSelect" required>
        <option value=""> 1 </option>
        <option value="1"> 2 </option>
        <option value="2"> 3 </option>
        <option value="3"> 4 </option>
      </select>
    </div>
    <div class="invalid-feedback">
    </div>
  </div>

  <button type="submit" class="btn btn-primary mb-2">Confirmar </button>
            </section>
      
          </div>
        </div>
    </div>

    </html>
