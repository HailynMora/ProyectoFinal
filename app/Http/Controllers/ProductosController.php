<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function anchetas(){
        $anchetas = DB::table('productos as pro')
                    ->join('categoria', 'pro.categoria', '=', 'categoria.id_cat')
                    ->select('pro.id_producto','pro.nom_producto', 'pro.descripcion_producto','pro.valor_producto','pro.foto_producto', 'categoria.descripcion_cat')
                    ->where('categoria', '=', '1')
                    ->orderBy('valor_producto', 'desc')
                    ->get();
        return view('productos.anchetas',['ancheta' => $anchetas]);
    }

    //buscar
    public function buscarProd(Request $request){
        $nom = $request->get('buscar');
        $prod = DB::table('productos')
                ->where('descripcion_producto','like',"%$nom%")
                ->join('categoria','categoria','=','categoria.id_cat')
                ->get();
        return view('productos.buscar',['producto' => $prod]);
    }   
}
