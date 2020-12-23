<html>
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
    <title>Contador </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/pricing/">

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
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <a class="navbar-brand" href="/anonimo">E.R.M. Shop</a>

  
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="/Contador/Lista">Listar Pagos</a>

    <a class="p-2 text-dark" href="/Contador/Cpago">Crear Pagos</a>

  </nav>
  <a class="btn btn-outline-primary" href="#">Cerrar Sesion</a>
</div>


<div id="content">
            <section class="p-y3">
              <div class="container">
                <div class="row">
                  <div class="col-lg-9">
                    <h1 class="font-weight-bold mb-0"> Contador </h1>
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
                      <h4> Crea nuevo pago </h4>
 <form>

<br>

<div class="mb-3">
    <div class="input-group is-invalid">
      <div class="input-group-prepend">
        <label class="input-group-text" for="validatedInputGroupSelect"> Vendedor </label>
      </div>
      <select class="custom-select" id="validatedInputGroupSelect" required>
        <option value=""> Elegir Cliente </option>
        <option value="1"> pedro </option>
        <option value="2"> esteban </option>
        <option value="3"> luis </option>
      </select>
    </div>
    <div class="invalid-feedback">

    Selecciona el Vendedor 


    </div>
  </div>



  <section class="bg-mix">
    <div class="container">
      <div class="card rounded-0">
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Descripcion</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Imagen</th>
                  <th scope="col">Status</th>
                  <th scope="col">Pagar</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">3</td>
                  <td>Playera</td>
                  <td>100% Algodon</td>
                  <td>5</td>
                  <td>$100.00</td>

                  <td> <img src="../imagenes/caballero/playeras/pc4.jpg" class="ml-3" alt="..." width="80px"> </td>

                  

             
                  <td>

                    <span class="badge badge-success">Vendido</span>

                    
                  </td>
                  <td>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Pagar</label>
                    </div>

                </td>


                </tr>
                <tr>
                  <td scope="row">7</td>
                  <td>Pantalon</td>
                  <td>100% Mezclilla</td>
                  <td>5</td>
                  <td>$150.00</td>
                  <td> <img src="../imagenes/caballero/pantalones/p4.jpg" class="ml-3" alt="..." width="80px"> </td>
                  <td>
                    <span class="badge badge-warning">Pendiente</span>

                    
                 
                  </td>
                  <td>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck2">
                      <label class="custom-control-label" for="customCheck2">Pagar</label>
                    </div>

                </td>
                </tr>
                <tr>
                  <td scope="row">5</td>
                  <td>Mochila</td>
                  <td>Grande, Uso escolar</td>
                  <td>5</td>
                  <td>$300.00</td>
                  <td> <img src="../imagenes/Accesorios/u5.jpg" class="ml-3" alt="..." width="80px"> </td>
                  <td>

                    <span class="badge badge-success">Vendido</span>

                    
                  </td>

                  <td>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck3">
                      <label class="custom-control-label" for="customCheck3">Pagar</label>
                    </div>

                </td>
                </tr>
              </tbody>
            </table>
          </div>






























<br>


 <div class="form-group">
    <label for="exampleInputEmail1">Descripcion Del Pago</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Escribe aqui la descripcion del Pago.</small>
  </div>



  <br>




  <form class="form-inline">
  <div class="form-group mb-2">
  <label for="exampleInputEmail1">Total a pagar</label>
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="txt" class="form-control" id="inputPassword2" placeholder="Cantidad en Pesos">
  </div>
</form>

<br>


  <button type="submit" class="btn btn-primary mb-2">Confirmar </button>

</div>
</body>
</html>
