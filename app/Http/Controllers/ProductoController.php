<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::select('id','nombre','descripcion','condicion')->where('id','<=',10)->get();
        return $productos;
    }

    

    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->save();
    }

    public function update(Request $request)
    {
        $producto = Producto::findOrFail($request->id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->save();
    }

    public function desactivar(Request $request)
    {
        //
    }
    public function activar(Request $request)
    {
        //
    }
    
}
