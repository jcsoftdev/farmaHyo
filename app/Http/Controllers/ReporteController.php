<?php

namespace App\Http\Controllers;

use App\Models\DetalleIngreso;
use App\Models\DetalleVenta;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


use App\Exports\IngresoExport;
use Maatwebsite\Excel\Facades\Excel; // as QExcel;
// use Maatwebsite\Excel\Excel;


class ReporteController extends Controller
{
    public function reporteIngreso(){
        $ingreso = DetalleIngreso::join('medicamentos','detalle_ingresos.idmedicamento','=','medicamentos.id')
        ->join('productos','productos.id','=','medicamentos.producto_id')
        ->join('presentaciones','presentaciones.id','=','medicamentos.presentacion_id')
        ->join('concentraciones','concentraciones.id','=','medicamentos.concentracion_id')
        // ->join('ingresos','ingresos.id','=','detalle_ingresos.idingreso')
        ->select(
            'detalle_ingresos.id as miIdIngreso',
            'detalle_ingresos.idingreso as lote',
            'detalle_ingresos.cantidad',
            'detalle_ingresos.precio',
            'detalle_ingresos.fecha_vencimiento',
            DB::raw("CONCAT(productos.nombre,' ', concentraciones.nombre ,' ',presentaciones.nombre) as medicamento"),

            )
        ->orderBy('detalle_ingresos.id','desc')
        ->get();
        return $ingreso;
    }
    public function ingresoMount(){
        $ingreso = DetalleIngreso::select(
            DB::raw("SUM(detalle_ingresos.precio * detalle_ingresos.cantidad) as suma")
            )
        ->get();
        return $ingreso;
    }
    public function reporteVenta(){
        $venta = DetalleVenta::join('ventas','detalle_ventas.idventa','=','ventas.id')
        ->join('medicamentos','detalle_ventas.idmedicamento','=','medicamentos.id')
        ->join('productos','productos.id','=','medicamentos.producto_id')
        ->join('presentaciones','presentaciones.id','=','medicamentos.presentacion_id')
        ->join('concentraciones','concentraciones.id','=','medicamentos.concentracion_id')
        // ->join('ventas','ventas.id','=','detalle_ventas.idingreso')
        ->select(
            'detalle_ventas.id as miIdVenta',
            'detalle_ventas.idventa as lote',
            'detalle_ventas.cantidad',
            'detalle_ventas.precio',
            'detalle_ventas.descuento',
            DB::raw("CONCAT(productos.nombre,' ', concentraciones.nombre ,' ',presentaciones.nombre) as medicamento"),

            )
        ->orderBy('detalle_ventas.id','desc')
        ->get();
        return $venta;
    }
    public function ventaMount(){
        $venta = DetalleVenta::join('ventas','detalle_ventas.idventa','=','ventas.id')
        ->join('medicamentos','detalle_ventas.idmedicamento','=','medicamentos.id')
        ->join('productos','productos.id','=','medicamentos.producto_id')
        ->join('presentaciones','presentaciones.id','=','medicamentos.presentacion_id')
        ->join('concentraciones','concentraciones.id','=','medicamentos.concentracion_id')
        // ->join('ventas','ventas.id','=','detalle_ventas.idingreso')
        ->select(
            DB::raw("SUM(detalle_ventas.precio * detalle_ventas.cantidad) as suma"),

            )
        // ->orderBy('detalle_ventas.id','asc')
        ->get();
        return $venta;
    }
    public function exportExcelIngreso() 
    {
        // return (new IngresoExport);
        // return new IngresoExport;
        return Excel::download(new IngresoExport, 'INGRESOS.xlsx');
        
        // ((new IngresoExport)->queue('reporte.xlsx'));
    }
}
