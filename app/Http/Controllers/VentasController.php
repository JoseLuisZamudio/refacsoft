<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuenta;
use App\ShopingCart;
use App\Producto;
use DB;
use Barryvdh\DomPDF\Facade as PDF;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ventas = ShopingCart::get();
        // $producto = Producto::where('id')
        $ventas = DB::table('shoping_carts')
                                ->join('productos', 'shoping_carts.producto_id', '=', 'productos.id')
                                ->join('cuentas', 'shoping_carts.cuenta_id', '=', 'cuentas.id')
                                ->select('shoping_carts.id', 'shoping_carts.cantidad', 'shoping_carts.precio','shoping_carts.created_at', 'productos.nombre')
                                ->where('cuentas.status','Pendiente')
                                ->get();
        // return $ventas;
        return view('ventas.index')->with(compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdf()
    {
      $ventas = DB::table('shoping_carts')
                              ->join('productos', 'shoping_carts.producto_id', '=', 'productos.id')
                              ->select('shoping_carts.id', 'shoping_carts.cantidad', 'shoping_carts.precio','shoping_carts.created_at', 'productos.nombre')
                              ->get();
      $pdf = PDF::loadView('ventas.pdf', ['ventas'=>$ventas]);
      return $pdf->download('ventas.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_venta)
    {
      $productos = ShopingCart::where('cuenta_id',$id_venta)->get();
      // return $productos;
      return view('ventas.show', compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
