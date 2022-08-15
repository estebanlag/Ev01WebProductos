@extends('layouts.master')

@section('title','Productos')




@section('header')

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="prodsucursal">Producto Sucursal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mostrarproducto">Ver tabla producto</a>
        </li>
        <li class="nav-item">
          <form action='/logout' method="POST">
            <a href="" onclick="this.closest('form').submit()" class="nav-link active">Logout</a>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>


@stop



@section('content')

<div class="container-fluid">

  <br>

<div class="row">

  <div class="col-2">
  <a href="{{url('crearproducto')}}" class="btn btn-primary">Crear Producto</a>
  </div>

  <div class="col-2">
  <a href="{{ url('categoria') }}" class="btn btn-primary">Crear Categoría</a>
</div>

<div class="col-2">
<a href="{{url('sucursal')}}" class="btn btn-primary">Crear Sucursal</a>
</div>

<br>
<br>

  <div class="col-7">

    <h2>Productos</h2>

  </div>
<!--
    <div class="col-4">

   <form class="d-flex" role="search" action="/buscar" method="POST">

        <input class="form-control me-2" type="search" id="busqueda" name="busqueda" placeholder="SKU, Nombre, o Sucursal" aria-label="Search">

        <button class="btn btn-outline-success" type="submit">Buscar</button>

    </form>

  </div>
 -->

  
</div>

<div class="row">

<table class="table">


  <thead>

    <tr>

      <th scope="col">#</th>

      <th scope="col">Nombre</th>

      <th scope="col">Cantidad</th>

      <th scope="col">Sucursal</th>

      <th scope="col">Código</th>

      <th scope="col">Categoría</th>

      <th scope="col">Precio</th>

      <th scope="col">Descripción</th>

      <th scope="col">Acción</th>

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