@extends('layouts.master')
@section('title','Crear Sucursal')

@section('header')

<h2  class="text-center mt-4 mb-4">Crear sucursal</h2>
@stop

@section('content')
<div class="container">
<form method="post" action="/sucursal">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="mb-3">
    <label for="direccion" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="direccion" name="direccion">
  </div>
  <div class="mb-3">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="tel" class="form-control" id="telefono" name="telefono">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a class="btn btn-primary" onClick="history.back()">Volver Atras</a>
</form>
</div>
<div class="container mt-4 mb-5">
  <h2 class="text-center m-4">Sucursales</h2>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Creado</th>
        <th>Actualizado</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($sucursales as $sucursal)
      <tr>
      <td>{{ $sucursal->nombre }}</td>
      <td>{{ $sucursal->direccion }}</td>
      <td>{{ $sucursal->telefono }}</td>
      <td>{{ $sucursal->email }}</td>
      <td>{{ FormatTime::LongTimeFilterCreated($sucursal->created_at) }}</td>
      <td>{{ FormatTime::LongTimeFilterUpdated($sucursal->updated_at) }}</td>
      <td>  
        <a href="#" <button class="btn btn-primary">Actualizar</button></a>
        <a href="#" <button class="btn btn-danger">Eliminar</button></a>
       </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@stop

@section('footer')
  @parent
@stop
