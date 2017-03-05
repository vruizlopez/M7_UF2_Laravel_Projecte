@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-4"><br>
                <img src="{{$Producto->url}}" style="max-width:100%" />
        </div>
        <div class="col-sm-8">
            <h1>{{$Producto->nombre}}</h1>
            <h4><b>Cantidad:</b> {{$Producto->cantidad}}</h4>
            <h4><b>Precio:</b> {{$Producto->precio}} <span class="glyphicon glyphicon-euro" aria-hidden="true"></span></h4>
            <h4><b>Descripcion del producto:</b> {{$Producto->descripcion}}</h4>
            @if($Producto->stock):
            	<h4><b>Stock:</b> Fuera de Stock</h4>
            	<button type="button" class="btn btn-danger">Reservar {{$Producto->nombre}}</button>
            @else:
            	<p><h4><b>Stock:</b> Disponible</p></h4>
                <div class="row">
                    <div class="col-sm-2">
                    <h4><b>Unidades:</b></h4>
                        <input class="form-control" type="number" value="1">
                    </div>
                </div><br><br>
                <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-ok"></span>Añadir</button>
            @endif
            <button type="button" class="btn btn-success" onclick="location.href='{{url('/')}}/catalog/edit/{{$Producto->id}}'"><span class="glyphicon glyphicon-pencil"></span>Editar Producto</button>
            <button type="button" class="btn btn-primary" onclick="window.history.back()"><span class="glyphicon glyphicon-chevron-left"</span>Volver a Productos</button>
        </div>
    </div><br>
@stop