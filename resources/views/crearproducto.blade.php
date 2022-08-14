@extends('layouts.master')
@section('title','Crear Producto')

@section('header')

<h2  class="text-center mt-4 mb-4">Crear Producto</h2>
@stop

@section('content')
<div class="container">
<form method="POST" action='/mostrarproducto'>
  <div class="mb-3">
    <label for="nombre" class="form-label">Codigo</label>
    <input type="text" class="form-control" id="codigo" name="codigo">
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="mb-3">
  <label for="estado" class="form-label">estado</label>
  <input type="number" name='estado' id='estado' class="form-control">

  </div>
  
  <div class="mb-3">
  <label for="image" class="form-label">img</label>
  <input type="text" name='image' id='image' class="form-control">

  </div>
  
  <div class="mb-3">
   <label for="descripcion" class="form-label">Descripción</label>
   <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
  </div>
 
 
  <button type="submit" class="btn btn-primary">Guardar</button>
  <button class="btn btn-primary" onClick="history.back()">Volver Atrás</button>
</form>
</div>

@stop

@section('footer')
  @parent
@stop
