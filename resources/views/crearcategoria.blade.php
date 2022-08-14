@extends('layouts.master')
@section('title','Crear Categoria')

@section('header')

<h2  class="text-center mt-4 mb-4">Crear Categoria</h2>
@stop

@section('content')
<div class="container">
<form method="POST" action="/categoria">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required>
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a class="btn btn-primary" onClick="history.back()">Volver Atras</a>
</form>
</div>
<div class="w-50 text-center container mt-4 mb-5">
  <h2 class="text-center m-4">Sucursales</h2>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($categorias as $categoria)
      <tr>
      <td>{{ $categoria->id }}</td>
      <td>{{ $categoria->nombre }}</td>
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
