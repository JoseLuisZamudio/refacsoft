<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    public function detalles(){
      return $this->hasMany(ShopingCart::class);
    }
}
