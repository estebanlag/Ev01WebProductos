@extends('layouts.master')
@section('title','producto sucursal')

@section('header')

<h2  class="text-center mt-4 mb-4">Asignar Productos a Sucursal</h2>
@stop


@section('content')
<div class="container">
<form method="POST" action="/prodsucursal">
  <div class="mb-3">
    <label for="nombre" class="form-label">Codigo Producto sucursal</label>
    <input type="text" class="form-control" id="codigo" name="cod_Producto_Sucursal">
  </div>
  <div class="mb-3">
  <label for="sucursal" class="form-label">Producto</label>
  <select class="form-select" aria-label="producto" id="producto" name="producto_id">
    <option selected disabled>Seleccione un producto</option>
@foreach($productos as $producto)

    <option value="{{$producto->id}}">{{$producto->nombre}}</option>
 @endforeach
  </select>
  </div>
 
  <div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad</label>
    <input type="text" class="form-control" id="cantidad" name="Cantidad">
  </div>
  <div class="mb-3">
    <label for="cantidad" class="form-label">estado</label>
    <input type="text" class="form-control" id="cantidad" name="estado">
  </div>
 
  <div class="mb-3">
    <label for="cantidad" class="form-label">Precio</label>
    <input type="text" class="form-control" id="precio" name="Precio">
  </div>
  
  <div class="mb-3">
  <label for="sucursal" class="form-label">Sucursal</label>
  <select class="form-select" aria-label="sucursal" id="sucursal" name="sucursal_id">
    <option selected disabled>Seleccione una Sucursal</option>
@foreach($sucursales as $sucursal)

    <option value="{{$sucursal->id}}">{{$sucursal->nombre}}</option>
 @endforeach
  </select>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <a class="btn btn-primary" onClick="history.back()">Volver Atras</a>
</form>
</div>

@foreach ($sucursales as $sucursal)

@endforeach

@stop

@section('footer')
  @parent
@stop
