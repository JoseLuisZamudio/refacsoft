<?php

namespace App\Http\Controllers;

use App\Cuenta;
use Illuminate\Http\Request;use DB;
use Barryvdh\DomPDF\Facade as PDF;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function show(Cuenta $cuenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuenta $cuenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $cuenta = auth()->user()->cuenta;
        $cuenta->status = 'Pendiente';
        $cuenta->save();

        $users = DB::table('cuentas')
                  ->where('user_id', auth()->user()->id)
                  ->Where('status', 'Pendiente')
                  ->get();
                  foreach ($users as $user) {
                    $datail_id = $user->id;

                  }
                  //$cart = DB::table('cart_details')->where('cart_id',$datail_id)->get();

                  $cart = DB::table('shoping_carts')
                  ->join('productos', 'shoping_carts.producto_id', '=', 'productos.id')
                  ->join('cuentas', 'shoping_carts.cuenta_id', '=', 'cuentas.id')
                  ->select('shoping_carts.id', 'shoping_carts.cantidad', 'shoping_carts.precio','shoping_carts.created_at', 'productos.nombre')
                  ->where('cuentas.id',$datail_id)
                              ->get();
        return view('ventas.ticket')->with(compact('cart'));

        //return back()->with('notification','Pedido realizado correctamente, pronto te contactaremos por correo.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function pdf()
    {
      //$users = DB::table('carts')->where('user_id',auth()->user()->id)->get();
    $users = DB::table('cuentas')
                  ->where('user_id', auth()->user()->id)
                  ->Where('status', 'Pendiente')
                  ->get();
                  foreach ($users as $user) {
                    $datail_id = $user->id;

                  }
                  //$cart = DB::table('cart_details')->where('cart_id',$datail_id)->get();

                  $cart = DB::table('shoping_carts')
                  ->join('productos', 'shoping_carts.producto_id', '=', 'productos.id')
                  ->join('cuentas', 'shoping_carts.cuenta_id', '=', 'cuentas.id')
                  ->select('shoping_carts.id', 'shoping_carts.cantidad', 'shoping_carts.precio','shoping_carts.created_at', 'productos.nombre')
                  ->where('cuentas.id',$datail_id)
                              ->get();
                              //echo $cart;
            return view('ventas.ticket')->with(compact('cart'));
                              //$pdf = PDF::loadView('ventas.pdf', ['ventas'=>$cart]);
                              //return $pdf->download('ventas.pdf');
    }
}
