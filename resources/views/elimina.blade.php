@extends('layouts.master')
@section('title','Productos')



@section('header')
 <h2>Producto</h2>
@stop

@section('content')

<div class="container-fluid">
<div class="row">
<center><b>Eliminado {{$nombre}} cantidad {{$cantidad}}</b> </center>

<a href='../../dashboard' class='btn btn-danger'>volver</a>
Sebastian martinez

</div>
</div>

@stop

@section('footer')
@parent

@stop 
