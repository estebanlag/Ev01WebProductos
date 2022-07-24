@extends('layouts.master')
@section('title','Productos')




@section('content')

<div class="container-fluid">
<div class="row">
<center><b>Actualizar {{$nombre}}</b> </center>
<div class="col-md-12" id="actualiza">
nombre:
<input type="text" class="form-control"  value="{{$nombre}}" placeholder="producto">
cantidad:
<input type="text" class="form-control" value="{{$cantidad}}" placeholder="cantidad">
<input type="text" class="form-control" value="{{$sucursal}}" placeholder="cantidad">

<button class="btn btn-success btn-lg" id="" onclick="actualiza();"> enviar</button>
</div>

</div>
</div>
Sebastian martinez
<script>
function actualiza(){
    document.getElementById("actualiza").innerHTML = "<h1>Producto actualizado!</h1> <a href='../../../dashboard' class='btn btn-danger'>volver</a>";

}

</script>
@stop

@section('footer')
@parent

@stop 
