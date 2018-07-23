<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $productos = Producto::paginate(6);
      return view('producto.index',compact('productos'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('producto.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $producto = new Producto;
    $producto->nombre = $request->nombre;
    $producto->u_medida = $request->u_medida;
    $producto->cantidad = $request->cantidad;
    $producto->precio_venta_mayoreo = $request->precio_venta_mayoreo;
    $producto->precio_vente_menudeo = $request->precio_vente_menudeo;
    $producto->fecha_ingreso = $request->fecha_ingreso;

    $file = $request->file('imagen');
    $path = public_path(). '/images/products';
    $fileName = uniqid().Auth::user()->id.'.'.$file->getClientOriginalExtension();
    $moved = $file->move($path, $fileName);

    if($moved){
      $producto->imagen = $fileName;
      $producto->save();
    }

      return redirect()->route('productos.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $producto = Producto::findOrFail($id);
    return view('producto.show', compact('producto'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $producto = Producto::findOrFail($id);
      return view('producto.edit', compact('producto'));
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
    $producto = Producto::findOrFail($id);
    $producto->nombre = $request->nombre;
    $producto->u_medida = $request->u_medida;
    $producto->cantidad = $request->cantidad;
    $producto->precio_venta_mayoreo = $request->precio_venta_mayoreo;
    $producto->precio_vente_menudeo = $request->precio_vente_menudeo;
    $producto->fecha_ingreso = $request->fecha_ingreso;

    if($request->imagen){
      $file = $request->file('imagen');
      $path = public_path(). '/images/products';
      $fileName = uniqid().Auth::user()->id.'.'.$file->getClientOriginalExtension();
      $moved = $file->move($path, $fileName);

      if($moved){
        $producto->imagen = $fileName;

      }
    }

      $producto->save();
      return redirect()->route('productos.index');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $producto = Producto::findOrFail($id);
      $producto->delete();
      
        return redirect()->route('productos.index')->with('notification','El producto ha sido eliminado correctamente.');
  }
}
