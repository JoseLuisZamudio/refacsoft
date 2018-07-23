<?php
// namespace App;
use Faker\Generator as Faker;
use App\Producto;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre'=>substr($faker->sentence(3), 0, -1),
        'u_medida'=>$faker->sentence(10),
        'cantidad'=>$faker->numberBetween($min = 1000, $max = 9000),
        'precio_venta_mayoreo'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000), // 48.8932
        'precio_vente_menudeo'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000), // 48.8932,
        'fecha_ingreso'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'imagen' => $faker->imageUrl($width = 640, $height = 480)
    ];
});
