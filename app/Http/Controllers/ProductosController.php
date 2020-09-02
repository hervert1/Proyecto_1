<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function AgregarProducto(Request $request){
        //$productos['coleccion'] = DB::table('productos')->get();
        $productos['codigo'] = $request->input("inputCodigo");
        $productos['marca'] = $request->input("inputMarca");
        $productos['color'] = $request->input("inputColor");
        $productos['descripcion'] = $request->input("inputDescripcion");
        $productos['precio'] = $request->input("inputPrecio");
        $productos['precioventa'] = $request->input("inputPrecioVenta");
        $productos_galeria['imagen1'] = $request->file("inputImagen1");
        $productos_galeria['imagen2'] = $request->file("inputImagen2");
        $productos_galeria['imagen3'] = $request->file("inputImagen3");
        $productos_galeria['imagen4'] = $request->file("inputImagen4");
        $productos_galeria['imagen5'] = $request->file("inputImagen5");
        $productos_invertario['disponible1'] = $request->input("inputDisponible1");
        $productos_invertario['disponible2'] = $request->input("inputDisponible2");
        $productos_invertario['disponible3'] = $request->input("inputDisponible3");
        $productos_invertario['disponible4'] = $request->input("inputDisponible4");

        $respueta_productos = DB::table('productos')->insert($productos);
        if($respueta_productos == true){
            return response()->json(['mensaje' => 'se inserto correctamente']);
        }
        else {
            return response()->json(['mensaje' => 'error en la insercion']);
        }
        //DB::table('galeria')->insert($productos_galeria);
        //DB::table('inventario')->insert($productos_invertario);
        return response()->json($productos);
    
    }
}
