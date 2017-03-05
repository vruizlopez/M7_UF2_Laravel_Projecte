@extends('layouts.master')
@section('content')
    <h1>Editar Producto</h1>
    <form action="{{url('catalog/postEdit/')}}/{{$id}}" method="POST">
        {{method_field('PUT')}}
        {{ csrf_field() }}
        <div class="form-group">
        <label>Nombre</label><br>
        <input type="text" name="nombre" value="{{$Producto->nombre}}">
        </div>
        <div>
        <label>Cantidad</label><br>
        <input type="text" name="cantidad" value="{{$Producto->cantidad}}">
        </div>
        <div>
        <label>Precio</label><br>
        <input type="text" name="precio" value="{{$Producto->precio}}">
        </div>
        <div>
        <label>Url (Imagen)</label><br>
        <input type="text" name="url" value="{{$Producto->url}}">
        </div>
        <div>
        <label>Descripción</label><br>
        <textarea class="form-control" type="text" name="descripcion" rows="5">{{$Producto->descripcion}}</textarea>
        </div><br>
        <input type="submit" value="Actualizar Producto" class="btn btn-primary">
    </form><br>
@stop