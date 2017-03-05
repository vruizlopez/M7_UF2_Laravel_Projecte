@extends('layouts.master')
@section('content')
    <form action="{{url('catalog/postCreate')}}" method="POST">
        {{method_field('PUT')}}
        {{ csrf_field() }}
        <div>
        <label>Nombre</label><br>
        <input type="text" name="nombre">
        </div>
        <div>
        <label>Cantidad</label><br>
        <input type="text" name="cantidad">
        </div>
        <div>
        <label>Precio</label><br>
        <input type="text" name="precio">
        </div>
        <div>
        <label>Url (Iamgen)</label><br>
        <input type="text" name="url">
        </div>
        <div>
        <label>Descripción</label><br>
        <textarea class="form-control" type="text" name="descripcion" rows="5"></textarea>
        </div><br>
        <input type="submit" value="Crear Producto" class="btn btn-primary">
     </form><br>
@stop