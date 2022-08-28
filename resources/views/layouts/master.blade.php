<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stock</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-white bg-info text-white">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{ route('productos.index') }}">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{ route('sucursales.index') }}">Sucursales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{ route('productos.create') }}">Agregar producto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{ route('sucursales.create') }}">Agregar sucursal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/asignar">Asignar producto a sucursal</a>
        </li>

      </ul>

      <form class="d-flex" action="/encontrarProducto" method="GET">
        <input class="form-control me-2" type="search" placeholder="Buscar producto" name="queryProducto" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>

    </div>
  </div>
</nav>
        @section('header')
            <h2>Cabecera de mi Web</h2>
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('footer')
        <div class="container-fluid mt-5 pt-5 pb-0 px-0 page-footer fixed-bottom">

        <footer class="bg-info text-white text-center py-3">
        <!-- Grid container -->
        <!-- Section: Form -->
        <section class="">
            <h3>Evaluación 3 CIISA</h3>
            <h4 class="mb-0">Creado por Grupo 2</h4>

        </section>
        <!-- Section: Form -->
        <!-- Grid container -->

        </footer>

</div>
      @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>