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
              <th scope="row">{{$productos->id}}</th>
              <td>{{$productos->codigo}}</td>
              <td >{{$productos->nombre}}</td>
              <td>{{$productos->descripcion}}</td>
              <td>{{$productos->estado}}</td>
              <td><img src="{{ $productos->image }}" width="50" height="50" class=""></td>
              <td><a href="/producto/update/{{$productos->id}}"><button type="button" class="btn btn-success" style="background-color:#45B143;">Editar</button></a></td>
              <td><a href="/producto/destroy/{{$productos->id}}"><button type="button" class="btn btn-danger" style="background-color:#F14600;">Eliminar</button></a></td>
          </tr>
        
          </tbody>
      </table>
</div>

@stop