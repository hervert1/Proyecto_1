<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function AgregarProducto(Request $request)
    {
        //$productos['coleccion'] = DB::table('productos')->get();
        $productos['codigo'] = $request->input("inputCodigo");
        $codigo_productos = DB::table('productos')->where('codigo', $productos['codigo'])->count();
        if ($codigo_productos == 0) {

            $productos['marca'] = $request->input("inputMarca");
            $productos['color'] = $request->input("inputColor");
            $productos['descripcion'] = $request->input("inputDescripcion");
            $productos['precio'] = $request->input("inputPrecio");
            $productos['precioventa'] = $request->input("inputPrecioVenta");

            $productos_invertario['disponible1'] = $request->input("inputDisponible1");
            $productos_invertario['disponible2'] = $request->input("inputDisponible2");
            $productos_invertario['disponible3'] = $request->input("inputDisponible3");
            $productos_invertario['disponible4'] = $request->input("inputDisponible4");

            $respuesta_productos = DB::table('productos')->insert($productos);
            if ($respuesta_productos == true) {
                $directorio = '/img/modelos/Modelo-' . $productos['codigo'];
                if (file_exists($directorio)) {
                    unlink($directorio);
                }
                if (mkdir($directorio, 0777, true)) {
                    $imagen1 = $request->file("inputImagen1");
                    $name_img_1 = $productos['codigo'] . "-1" . '.' . $imagen1->getClientOriginalExtension();
                    $imagen1->move($directorio, $name_img_1);
                    $productos_galeria['imagen1'] = $directorio . "/" . $name_img_1;

                    $imagen2 = $request->file("inputImagen2");
                    $name_img_2 = $productos['codigo'] . "-2" . '.' . $imagen2->getClientOriginalExtension();
                    $imagen2->move($directorio, $name_img_2);
                    $productos_galeria['imagen2'] = $directorio . "/" . $name_img_2;

                    $imagen3 = $request->file("inputImagen3");
                    $name_img_3 = $productos['codigo'] . "-3" . '.' . $imagen3->getClientOriginalExtension();
                    $imagen3->move($directorio, $name_img_3);
                    $productos_galeria['imagen3'] = $directorio . "/" . $name_img_3;

                    $imagen4 = $request->file("inputImagen4");
                    $name_img_4 = $productos['codigo'] . "-4" . '.' . $imagen4->getClientOriginalExtension();
                    $imagen4->move($directorio, $name_img_4);
                    $productos_galeria['imagen4'] = $directorio . "/" . $name_img_4;

                    $imagen5 = $request->file("inputImagen5");
                    $name_img_5 = $productos['codigo'] . "-5" . '.' . $imagen5->getClientOriginalExtension();
                    $imagen5->move($directorio, $name_img_5);
                    $productos_galeria['imagen5'] = $directorio . "/" . $name_img_5;

                    $productos_galeria['idproducto'] = $this->getIdProducto($productos['codigo']);

                    $respuesta_galeria = DB::table('galeria')->insert($productos_galeria);
                    if ($respuesta_galeria == true) {

                        $tchica['idproducto'] = $productos_galeria['idproducto'];
                        $tchica['idtalla'] = '1';
                        $tchica['disponible'] = $request->input("inputDisponible1");
                        $tchica['vendido'] = '0';

                        $tmed['idproducto'] = $productos_galeria['idproducto'];
                        $tmed['idtalla'] = '2';
                        $tmed['disponible'] = $request->input("inputDisponible2");
                        $tmed['vendido'] = '0';

                        $tgran['idproducto'] = $productos_galeria['idproducto'];
                        $tgran['idtalla'] = '3';
                        $tgran['disponible'] = $request->input("inputDisponible3");
                        $tgran['vendido'] = '0';

                        $txl['idproducto'] = $productos_galeria['idproducto'];
                        $txl['idtalla'] = '4';
                        $txl['disponible'] = $request->input("inputDisponible4");
                        $txl['vendido'] = '0';

                        $respuesta_inventario = DB::table('inventario')->insert([
                            $tchica,
                            $tmed,
                            $tgran,
                            $txl
                        ]);
                        if ($respuesta_inventario == true) {
                            return response()->json(['mensaje' => 'Se inserto con exito']);
                        } else {
                            return response()->json(['mensaje' => 'error, no se pudo insertar']);
                        }
                    } else {
                        return response()->json(['mensaje' => 'no se pudo insertar']);
                    }
                } else {
                    return response()->json(['mensaje' => 'no se pudo crear el directorio']);
                }
            } else {
                return response()->json(['mensaje' => 'error en la insercion']);
            }
        } else {
            return response()->json(['mensaje' => 'error codigo duplicado']);
        }
    }

    public function getIdProducto($codigo)
    {
        $query = DB::table('productos')->where('codigo', $codigo)->first();
        return $query->idproducto;
    }

    public function test()
    {
    }
}
