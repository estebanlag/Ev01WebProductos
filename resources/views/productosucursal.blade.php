@extends('layouts.master')
@section('title','producto sucursal')

@section('header')

<h2  class="text-center mt-4 mb-4">Asignar Productos a Sucursal</h2>
@stop


@section('content')
<div class="container">
<form method="post" action="{{ url('/guardarproductoSucursal') }}">
  <div class="mb-3">
    <label for="nombre" class="form-label">Codigo Producto sucursal</label>
    <input type="text" class="form-control" id="codigo" name="codigo">
  </div>
  <div class="mb-3">
  <label for="sucursal" class="form-label">Producto</label>
  <select class="form-select" aria-label="producto" id="producto" name="producto">
    <option selected disabled>Seleccione un producto</option>
@foreach($productos as $producto)

    <option value="{{$producto->id}}">{{$producto->nombre}}</option>
 @endforeach
  </select>
  </div>
 
  <div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad</label>
    <input type="text" class="form-control" id="cantidad" name="cantidad">
  </div>
 
  <div class="mb-3">
    <label for="cantidad" class="form-label">Precio</label>
    <input type="text" class="form-control" id="precio" name="precio">
  </div>
  
  <div class="mb-3">
  <label for="sucursal" class="form-label">Sucursal</label>
  <select class="form-select" aria-label="sucursal" id="sucursal" name="sucursal">
    <option selected disabled>Seleccione una Sucursal</option>
@foreach($sucursales as $sucursal)

    <option value="{{$sucursal->id}}">{{$sucursal->nombre}}</option>
 @endforeach
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
