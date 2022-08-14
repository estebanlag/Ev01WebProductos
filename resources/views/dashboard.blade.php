@extends('layouts.master')
@section('title','Productos')


@section('header')
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="{{route('ProductoSucursal')}}">Producto Sucursal</a>
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
</nav>
@stop

@section('content')
<div class="container-fluid">
  <br>
<div class="row">
  <div class="col-2">
  <a href="{{route('CrearProducto')}}" class="mt-4 mb-4">
     <button type="button" class="btn btn-primary">Crear Producto</button>
  </a>
  </div>
  <div class="col-2">
  <a href="{{route('CrearCategoria')}}" class="mt-4 mb-4">
     <button type="button" class="btn btn-primary">Crear Categoría</button>
  </a>
</div>
<div class="col-2">
<a href="{{route('CrearSucursal')}}" class="mt-4 mb-4">
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
<?php $ix=1; ?>
@for ($i = 2; $i < 8; $i++)




@component('components.productos')
@slot('nombre')
producto{{$i}}
@endslot

@slot('cantidad')
{{$i*5}}
@endslot

@slot('id')
HAS{{$i}}
@endslot

@slot('sucursal')
sucursal{{$ix}}
@endslot



@slot('categoria')
categoria{{$ix}}
@endslot

@slot('idx')
{{$ix++;}}
@endslot
@slot('precio')
${{$ix*6577;}}
@endslot

@endcomponent
@endfor
</tbody>
</table>
</div>
</div>


@stop

@section('footer')
@parent

@stop 
