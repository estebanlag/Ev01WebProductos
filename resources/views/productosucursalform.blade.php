@extends('layouts.master')
@section('title','producto sucursal')

@section('header')

<h2  class="text-center mt-4 mb-4">Actualizar precio de Productos a Sucursal</h2>
@stop


@section('content')
<div class="container">




      @foreach($productosucursal as $valor)
      <form method="POST" action="/prodsucursal/{{$valor->id}}">
      {{ method_field('PUT') }}
<label> Actualizar precio <br>
<label><b>Sucursal: </b>
<input type="hidden" name='id' value="{{$valor->id}}"/>
        <input type="text" name="nombre" class="form-control" value="{{$valor->nombre}}" disabled>
</label>
<label> <b>Precio</b>
        <input type="number" name='precio' class="form-control" value="{{$valor->Precio}}">
</label>
        <hr>
        <center>
<input type="submit" class="btn btn-success">
</center>
        </form>
      @endforeach
    

</div>



@stop

@section('footer')
  @parent
@stop
