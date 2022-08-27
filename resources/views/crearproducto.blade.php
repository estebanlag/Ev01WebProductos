@extends('layouts.master')
@section('title','Crear Producto')

@section('header')

<h2  class="text-center mt-4 mb-4">Crear Producto</h2>
@stop

@section('content')
<div class="container">
<form method="POST" action='/producto' enctype="multipart/form-data">
  <div class="mb-3">
    <label for="nombre" class="form-label">Codigo</label>
    <input type="text" class="form-control" id="codigo" name="codigo">
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="mb-3">
  <label for="estado" class="form-label">estado
  <input type="number" name='estado' id='estado' class="form-control">
  </label>
  <label for="precio" class="form-label">precio
  <input type="number" name='precio' id='precio' class="form-control">
  </label>
  <label for="cantidad" class="form-label">cantidad
  <input type="number" name='cantidad' id='cantidad' class="form-control">
  </label>
</div>
Sucursal
<select class="form-control" name="sucursal">
@foreach($sucursales as $sucursal)
<option value="{{$sucursal->id}}">{{$sucursal->nombre}}</option>

@endforeach
</select>
Categoría
<select class="form-control" name="categoria">
@foreach($categorias as $categoria)
<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>

@endforeach
</select>
  
  <div class="mb-3">
  <label for="image" class="form-label">Imagen</label>
  <input type="file" name='image' id='image' class="form-control" accept=".png, .jpg, .jpeg">

  </div>
  
  <div class="mb-3">
   <label for="descripcion" class="form-label">Descripción</label>
   <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
  </div>
 
 
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a class="btn btn-primary" onClick="history.back()">Volver Atras</a>
</form>
</div>

@stop

@section('footer')
  @parent
@stop




/-----------------------------/