<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function AgregarProducto(Request $request){
        $productos['codigo'] = 'entre';
        return response()->json(productos);
    }
}
