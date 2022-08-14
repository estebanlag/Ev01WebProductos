@extends('layouts.master')
@section('title','producto sucursal')

@section('header')
<br>
<h2 style="text-align:center">Tabla producto</h2>
@stop

@section('content')

<br>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <table class="table table-striped" bgcolor="white">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Codigo</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripción</th>
              <th scope="col">Estado</th>
              <th scope="col">Imagen</th>
            </tr>
          </thead>
          <tbody>
            @foreach($productos as $producto)
            <tr>
              <th scope="row">{{ $producto->id }}</th>
              <td>{{ $producto->codigo}}</td>
              <td >{{ $producto->nombre }}</td>
              <td>{{ $producto->descripcion }}</td>
              <td>{{ $producto->estado }}</td>
              <td><img src="{{ $producto->image }}" width="50" height="50" class="img-thumbnail"></td>
          </tr>
          @endforeach
          </tbody>
      </table>
</div>
<br>
<button class="btn btn-primary" onClick="history.back()">Volver Atras</button>

@stop