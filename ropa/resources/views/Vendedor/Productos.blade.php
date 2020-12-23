
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!doctype html>
<html lang="en">


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Vendedor</title>

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



  <body background="red">


    <nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="/anonimo" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="/Vendedor/actualizar">Actualizar Propuesta</a>
    <a class="py-2 d-none d-md-inline-block" href="/Vendedor/CrearP">Crear Propuesta</a>
    <a class="py-2 d-none d-md-inline-block" href="/Vendedor/Productos">Productos</a>
    <a class="py-2 d-none d-md-inline-block" href="/Vendedor/Ventas">Ventas</a>
    <a class="py-2 d-none d-md-inline-block" href="/Vendedor/Compras">Compras</a>



    <a button type="button" class="py-2 d-none d-md-inline-block" href="/Vendedor/Notificasiones" >
      Notifications <span class="badge badge-light">4</span>
    </button> </a>

    

    <a class="btn btn-outline-primary" href="#">Cerrar Sesion</a>


  </div>
</nav>



     
     
     <div id="content">
            <section class="p-y3">
              <div class="container">
                <div class="row">
                  <div class="col-lg-9">
                    <h1 class="font-weight-bold mb-0"> Vendedor</h1>
                    <p class="lead text-muted">Productos</p>
                  </div>
                  
                </div>
              </div>
            </section>
            <section class="bg-mix">
              <div class="container">
                <div class="card rounded-0">
                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Imagen</th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Playera</td>
                            <td>100% Algodon</td>
                            <td>Caballero</td>
                            <td>5</td>
                            <td>$100.00</td>

                            <td> <img src="../imagenes/caballero/playeras/pc4.jpg" class="ml-3" alt="..." width="80px"> </td>

                            

                       
                            <td>

                              <span class="badge badge-success">Aceptado</span>

                              
                            </td>
                          </tr>
                          <tr>
                            <td>Pantalon</td>
                            <td>100% Mezclilla</td>
                            <td>Dama</td>
                            <td>5</td>
                            <td>$150.00</td>
                            <td> <img src="../imagenes/caballero/pantalones/p4.jpg" class="ml-3" alt="..." width="80px"> </td>
                            <td>


                              <span class="badge badge-danger">Denegado</span>
                              <button type="submit" class="btn btn-danger" onclick="return confirm('¿desea borrar?');">  ELIMINAR</button></td>
                            </td>
                          </tr>
                          <tr>
                            <td>Mochila</td>
                            <td>Grande, Uso escolar</td>
                            <td>Niño</td>
                            <td>5</td>
                            <td>$300.00</td>
                            <td> <img src="../imagenes/Accesorios/u5.jpg" class="ml-3" alt="..." width="80px"> </td>
                            <td>
                              <span class="badge badge-warning">Propuesta Pendiente</span>

                              <button type="submit" class="btn btn-danger" onclick="return confirm('¿desea borrar?');">  ELIMINAR</button></td>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        </div>
    </div>
    </html>
