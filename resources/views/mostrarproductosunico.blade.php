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
              <td>
              @if(Storage::disk('images')->has($productos->image))
                <img src="{{ url('miniatura/'. $productos->image) }}" width="50" height="50" class="img-thumbnail" alt="">
              @else
                <img src="{{ $productos->image }}" width="50" height="50" class="img-thumbnail">
              @endif</td>
              
              <td><a href="/producto/destroy/{{$productos->id}}"><button type="button" class="btn btn-danger" style="background-color:#F14600;">Eliminar</button></a></td>
          </tr>

        
          </tbody>
      </table>

 


    </div>
<div class='col-md-12'>
<form method="POST" action="{{$productos->id}}" enctype="multipart/form-data">
{{ method_field('PUT') }}
<input type="hidden" name="id" value="{{$productos->id}}">
<label> Codigo<input type="text" name="codigo" class='form-control' value="{{$productos->codigo}}" /></label>
<label>Nombre<input type="text" name="nombre" class='form-control' value="{{$productos->nombre}}" /></label>
<label>Descripción<input type="text" name="descripcion" class='form-control' value="{{$productos->descripcion}}"/></label>
<label>Estado<input type="number" name="estado" max='1' class='form-control' value="{{$productos->estado}}"/></label>
<label>Imagen<input type="file" name="image" class='form-control' value="{{asset($productos->image)}}"/></label>
<input type="submit" class='btn btn-success' value="actualizar"/>
</form>
</div>

@stop