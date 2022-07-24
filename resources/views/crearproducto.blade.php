@extends('layouts.master')
@section('title','Crear Producto')

@section('header')

<h2  class="text-center mt-4 mb-4">Crear Producto</h2>
@stop

@section('content')
<div class="container">
<form method="post" action="{{ url('/productoGuardar') }}">
  <div class="mb-3">
    <label for="nombre" class="form-label">Codigo</label>
    <input type="text" class="form-control" id="codigo" name="codigo">
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="mb-3">
  <label for="categoria" class="form-label">Categoría</label>
  <select class="form-select" aria-label="categoría" id="categoria" name="categoria">
    <option selected>Seleccione una Categoría</option>
    <option value="categoria 1">Categoria 1</option>
    <option value="categoria 2">Categoria 2</option>
    <option value="categoria 3">Categoria 3</option>
  </select>
  </div>
  <div class="mb-3">
  <label for="sucursal" class="form-label">Sucursal</label>
  <select class="form-select" aria-label="sucursal" id="sucursal" name="sucursal">
    <option selected>Seleccione una Sucursal</option>
    <option value="sucursal 1">Sucursal 1</option>
    <option value="sucursal 2">Sucursal 2</option>
    <option value="sucursal 3">Sucursal 3</option>
  </select>
  </div>
  <div class="mb-3">
   <label for="descripcion" class="form-label">Descripción</label>
   <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad</label>
    <input type="text" class="form-control" id="cantidad" name="cantidad">
  </div>
  <div class="mb-3">
    <label for="precio" class="form-label">Precio</label>
    <input type="text" class="form-control" id="precio" name="precio">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  <button class="btn btn-primary" onClick="history.back()">Volver Atras</button>
</form>
</div>

@stop

@section('footer')
  @parent
@stop
