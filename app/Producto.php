<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  // protected $table = 'productos';

  protected $fillable = [
      'nombre', 'u_medida', 'cantidad', 'precio_venta_mayoreo', 'precio_vente_menudeo', 'fecha_ingreso', 'imagen',
  ];
}
