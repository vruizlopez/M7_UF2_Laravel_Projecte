<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
class CatalogController extends Controller
{
    public function getIndex(){
        $arrayProductos = Productos::all();
        //$arrayPeliculas = $this->ArrayPeliculas;
    	return view('catalog.index', array("arrayProductos"=>$arrayProductos));
    }
    public function getShow($id){
        //return view('catalog.show', array("Peliculas"=>$this->arrayPeliculas[$id]),
        //array('id'=>$id));
        $producto = Productos::find($id);
    	return view('catalog.show',array('Producto'=>$producto));
    }
    public function getCreate(){
    	return view('catalog.create');
    }
    public function getEdit($id){
        //return view('catalog.edit', array('id'=>$id));
        $producto = Productos::findOrFail($id);
    	return view('catalog.edit',array('Producto'=>$producto, 'id'=>$id));
    }
    public function postCreate(Request $request){
        $producto = new Productos();
        if ($request-> has("nombre") && $request-> has("cantidad") && $request-> has("precio") && $request-> has("url") && $request-> has("descripcion"))
        {
            $producto->nombre = $request->input("nombre");
            $producto->cantidad = $request->input("cantidad");
            $producto->precio = $request->input("precio");
            $producto->url = $request->input("url");
            $producto->descripcion = $request->input("descripcion");
            $producto->stock = false;
            $producto->save();
            return "Producto creado con éxito";
        }else
        return "No se ha podido crear el Producto, revise los campos*";
    }
    public function postEdit(Request $request, $id){
         $producto = Productos::find($id);
        if( $request->has("nombre") && $request->has("cantidad") && $request->has("precio") && $request->has("url") && $request->has("descripcion"))
         {
            $producto->nombre = $request->input("nombre");
            $producto->cantidad = $request->input("cantidad");
            $producto->precio = $request->input("precio");
            $producto->url = $request->input("url");
            $producto->descripcion = $request->input("descripcion");
            $producto->stock = false;
            if( $request->has("stock") )
                $producto->stock = true;
            $producto->save();
            return "Producto actualizado correctamente";
        } else
            return "No se ha podido actualizar el Producto, revise los campos*";
    }
}
