@extends('layouts.master')
@section('title','producto sucursal')

@section('header')
<br>
<h2 style="text-align:center">Tabla categoria</h2>
@stop

@section('content')

<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    <form class="d-flex" role="search" action="{{ url('mostrarcategoria') }}" method="get">
      <input class="form-control me-2" value="" id="mostrarcategoria" name="mostrarcategoria" type="search" placeholder="Buscar categoria" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
</nav>

<br>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <table class="table table-striped" bgcolor="white">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Categoria</th>
              <th scope="col">Estado</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categorias as $categoria)
            <tr>
              <th scope="row">{{ $categoria->id }}</th>
              <td >{{ $categoria->nombre }}</td>
              <td >{{ $categoria->estado }}</td>
          </tr>
          @endforeach
          </tbody>
      </table>
</div>
<br>
<button class="btn btn-primary" onClick="history.back()">Volver Atras</button>

@stop