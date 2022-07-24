@extends('layouts.master')
@section('title','Productos')




@section('content')

<div class="container-fluid">
  <br>
<div class="row">
<center><b>Eliminado {{$nombre}} cantidad {{$cantidad}}</b> </center>

<a href='../../dashboard' class='btn btn-danger'>volver</a>
</div>
</div>

@stop

@section('footer')
@parent

@stop 
