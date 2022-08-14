@extends('layouts.master')
@section('title','Crear Categoria')

@section('header')

<h2  class="text-center mt-4 mb-4">Crear Categoria</h2>
@stop

@section('content')
<div class="container">
<form method="post" action="#">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  <button class="btn btn-primary" onClick="history.back()">Volver Atras</button>
</form>
</div>

@stop

@section('footer')
  @parent
@stop
