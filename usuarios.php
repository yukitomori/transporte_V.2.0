<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>

    <?php
    echo 'Usuario';
    ?>
  </title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


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
  <link href="assets/css/dashboard.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Administrador Transportes</a>


  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="#">
                <span data-feather="home"></span>
                Inicio
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="users"></span>
                Usuarios <span class="sr-only">(current)</span>
              </a>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Lineas
              </a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Rutas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="plus-circle"></span>
                Comentarios
              </a>
            </li>

          </ul>


        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Usuarios</h1>
        </div>
        <div class="row">

        <div class="col-md-12">
            <button type="button" class="btn btn-danger">Crear</button>
        </div>
        </div>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Usuario</th>
              <th scope="col">Nombres</th>
              <th scope="col">Apellido Paterno</th>
              <th scope="col">Apellido Materno</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark@hotmail.com</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>
                <button type="button" class="btn btn-danger">Editar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob@gmail.com</td>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>
                  <button type="button" class="btn btn-danger">Editar</button>
                  <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry@yahoo.es</td>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td>
                  <button type="button" class="btn btn-danger">Editar</button>
                  <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
          </tbody>
        </table>

        <div class="row">
          <div class="col-sm-4">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Correo electrónico</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                  placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Constraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Tipo de usuario</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>ADMINISTRADOR</option>
                  <option>USUARIO</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
          </div>

        </div>

      </main>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script src="assets/js/dashboard.js"></script>
</body>

</html>