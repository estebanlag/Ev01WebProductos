@extends('layouts.master')
@section('title','producto sucursal')

@section('content')


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
            
            <tr>
              <th scope="row">{{$sucursal->id}}</th>
              <td>{{$sucursal->codigo}}</td>
              <td >{{$sucursal->nombre}}</td>
              <td>{{$sucursal->descripcion}}</td>
              <td>{{$sucursal->estado}}</td>
              <td></td>
              
              <td><a href="/sucursal/destroy/{{$sucursal->id}}"><button type="button" class="btn btn-danger" style="background-color:#F14600;">Eliminar</button></a></td>
          </tr>

        
          </tbody>
      </table>

 


    </div>
<div class='col-md-12'>
<form method="POST" action="{{$sucursal->id}}" enctype="multipart/form-data">
{{ method_field('PUT') }}
<input type="hidden" name="id" value="{{$sucursal->id}}">
<label> Codigo<input type="text" name="nombre" class='form-control' value="{{$sucursal->nombre}}" /></label>
<label>Nombre<input type="text" name="direccion" class='form-control' value="{{$sucursal->direccion}}" /></label>
<label>Descripción<input type="text" name="telefono" class='form-control' value="{{$sucursal->telefono}}"/></label>
<label>Estado<input type="number" name="email" max='1' class='form-control' value="{{$sucursal->email}}"/></label>
<label>Estado<input type="number" name="estado" max='1' class='form-control' value="{{$sucursal->estado}}"/></label>

<input type="submit" class='btn btn-success' value="actualizar"/>
</form>
</div>

@stop