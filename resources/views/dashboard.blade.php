@extends('layouts.master')

@section('title','Productos')




@section('header')

<nav class="navbar navbar-expand-lg bg-light">
<<<<<<< HEAD

    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav">

          <li class="nav-item">

            <a class="nav-link" href="">Dashboard</a>

          </li>

          <li class="nav-item">

            <a class="nav-link text-primary" href="prodsucursal/create">Producto Sucursal</a>

          </li>

          <li class="nav-item">

            <a class="nav-link text-primary" href="/mostrarproducto">Ver tabla producto</a>

          </li>

          <li class="nav-item">

            <a class="nav-link text-primary" href="/mostrarcategoria">Ver tabla categoria</a>

          </li>

        </ul>

      </div>

      <div>

        <form action='/logout' method="POST">

          <a href="#" onclick="this.closest('form').submit()" class="text-decoration-none">

             Logout

          </a>

        </form>

      </div>

    </div>

=======
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="prodsucursal/create">Producto Sucursal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="/mostrarproducto">Ver tabla producto</a>
          </li>
        </ul>
      </div>
      <div>
        <form action='/logout' method="POST">
          <a href="#" onclick="this.closest('form').submit()" class="text-decoration-none">
             Logout
          </a>
        </form>
      </div>
    </div>
>>>>>>> 9879ae74bcfc9ec57acf437d6da3a534fc64cb15
</nav>

@stop



@section('content')

<div class="container-fluid">

  <br>

<div class="row">

  <div class="col-2">

  <a href="{{url('crearproducto')}}" class="mt-4 mb-4">

     <button type="button" class="btn btn-primary">Crear Producto</button>

  </a>

  </div>

  <div class="col-2">

  <a href="{{ url('categoria') }}" class="mt-4 mb-4">

     <button type="button" class="btn btn-primary">Crear Categoría</button>

  </a>

</div>

<div class="col-2">

<a href="{{url('sucursal')}}" class="mt-4 mb-4">

     <button type="button" class="btn btn-primary">Crear Sucursal</button>

  </a>

</div>

  

  <div class="col-8">

    <h2>Productos</h2>

  </div>

  <div class="col-4">

   <form class="d-flex" role="search">

        <input class="form-control me-2" type="search" placeholder="SKU, Nombre, o Sucursal" aria-label="Search">

        <button class="btn btn-outline-success" type="submit">Buscar</button>

    </form>

  </div>

</div>

<div class="row">




<table class="table">
<<<<<<< HEAD
=======
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">cantidad</th>
      <th scope="col">sucursal</th>
      <th scope="col">cod</th>
      <th scope="col">categoría</th>
      <th scope="col">precio</th>
      <th scope="col">descripción</th>
      <th scope="col">acción</th>
    </tr>
    </tr>
  </thead>
  <tbody>
<?php $ix=1; ?>
@for ($i = 2; $i < 8; $i++)
>>>>>>> 9879ae74bcfc9ec57acf437d6da3a534fc64cb15

  <thead>

    <tr>

      <th scope="col">#</th>

      <th scope="col">nombre</th>

      <th scope="col">cantidad</th>

      <th scope="col">sucursal</th>

      <th scope="col">cod</th>

      <th scope="col">categoria</th>

      <th scope="col">precio</th>

      <th scope="col">descripción</th>

      <th scope="col">acción</th>

    </tr>

    </tr>

  </thead>

  <tbody>

<?php echo $td; ?>

</tbody>

</table>

</div>

</div>




@stop



@section('footer')

@parent



@stop 