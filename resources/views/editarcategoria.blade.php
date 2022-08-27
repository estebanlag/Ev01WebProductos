@extends('layouts.master')
@section('title','Crear Categoria')

@section('header')

<h2  class="text-center mt-4 mb-4">Editar categoría</h2>
@stop

@section('content')
<div class="container">
<form method="POST" action="/categoriaupdated">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="hidden" value="{{ $categoria[0]->id }}" class="form-control" id="id" name="id" required>
    <input type="text" value="{{ $categoria[0]->nombre }}" class="form-control" id="nombre" name="nombre" required>
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a class="btn btn-primary" href="/categoria">Volver</a>
</form>
</div>
@stop

@section('footer')
  @parent
@stop