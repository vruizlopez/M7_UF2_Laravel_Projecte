@extends('layouts.master')
@section('content')
    <div class="row">

        @foreach( $arrayProductos as $key => $producto )
        <div class="col-xs-6 col-sm-4 col-md-3 text-center">

            <a href="{{ url('/catalog/show/' . $producto->id) }}">
                <img src="{{$producto->url}}" style="height:160px;width:160px;border:5"/>
                <h4 style="min-height:45px;margin:5px 0 10px 0">
                    {{$producto->nombre}}
                    
                </h4>
            </a>

        </div>
        @endforeach

    </div>
@stop