<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopingCart extends Model
{
    public function producto(){
      return $this->belongsTo(Producto::class);
    }
}
