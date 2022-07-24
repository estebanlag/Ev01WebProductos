@extends('layouts.master')
@section('title','producto sucursal')

@section('header')

<h2  class="text-center mt-4 mb-4">Asignar Productos a Sucursal</h2>
@stop

@section('content')
<div class="container">
<form method="post" action="{{ url('/guardarproductoSucursal') }}">
  <div class="mb-3">
    <label for="nombre" class="form-label">Codigo Producto</label>
    <input type="text" class="form-control" id="codigo" name="codigo">
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre Producto</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad</label>
    <input type="text" class="form-control" id="cantidad" name="cantidad">
  </div>
  <div class="mb-3">
  <label for="categoria" class="form-label">Categoría</label>
  <select class="form-select" aria-label="categoría" id="categoria" name="categoria">
    <option selected>Seleccione una Categoría</option>
    <option value="categoria 1">Categoria1</option>
    <option value="categoria 2">Categoria2</option>
    <option value="categoria 3">Categoria3</option>
  </select>
  </div>
  <div class="mb-3">
  <label for="sucursal" class="form-label">Sucursal</label>
  <select class="form-select" aria-label="sucursal" id="sucursal" name="sucursal">
    <option selected>Seleccione una Sucursal</option>
    <option value="sucursal 1">Sucursal1</option>
    <option value="sucursal 2">Sucursal2</option>
    <option value="sucursal 3">Sucursal3</option>
  </select>
  </div>
  <div class="mb-3">
  <label for="sucursaldestino" class="form-label">Sucursal Destino</label>
  <select class="form-select" aria-label="sucursaldestino" id="sucursaldestino" name="sucursaldestino">
    <option selected>Seleccione una Sucursal</option>
    <option value="sucursal1">Sucursal1</option>
    <option value="sucursal2">Sucursal2</option>
    <option value="sucursal3">Sucursal3</option>
  </select>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <button class="btn btn-primary" onClick="history.back()">Volver Atras</button>
</form>
</div>

@stop

@section('footer')
  @parent
@stop
