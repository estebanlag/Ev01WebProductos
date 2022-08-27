@extends('layouts.master')
@section('title','producto sucursal')

@section('header')
<br>
<h2 style="text-align:center">Tabla producto</h2>
@stop

@section('content')

<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    <form class="d-flex" role="search" action="{{ url('mostrarproducto') }}" method="get">
      <input class="form-control me-2" value="" id="buscarproducto" name="buscarproducto" type="search" placeholder="Buscar producto" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
</nav>

<br>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <table class="table table-striped" bgcolor="white">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Codigo</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripción</th>
              <th scope="col">Estado</th>
              <th scope="col">Imagen</th>
              <th scope="col">Creado</th>
              <th scope="col">Actualizado</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            @foreach($productos as $producto)
            <tr>
              <th scope="row">{{ $producto->id }}</th>
              <td>{{ $producto->codigo}}</td>
              <td >{{ $producto->nombre }}</td>
              <td>{{ $producto->descripcion }}</td>
              <td>{{ $producto->estado }}</td>
              <td><img src=".images/{{$producto->image}}" width="50" height="50" class="img-thumbnail"></td>
              <td>{{ FormatTime::LongTimeFilterCreated($producto->created_at) }}</td>
              <td>{{ FormatTime::LongTimeFilterUpdated($producto->updated_at) }} </td>
              <td><a class="btn btn-danger" href="/producto/{{ $producto->id }}"> Actualizar</a> </td>
          </tr>
          @endforeach
          </tbody>
      </table>
    </div>
<br>
<a href="/dashboard" type="button" class="btn btn-primary">Volver al inicio</a>


@stop