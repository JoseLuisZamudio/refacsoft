<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = factory(Producto::class, 50)->create();
    }
}
