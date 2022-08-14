@extends('layouts.master')
@section('title','Crear Sucursal')

@section('header')

<h2  class="text-center mt-4 mb-4">Crear sucursal</h2>
@stop

@section('content')
<div class="container">
<form method="post" action="#">
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

@stop

@section('footer')
  @parent
@stop
