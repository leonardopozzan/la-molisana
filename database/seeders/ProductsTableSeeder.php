<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Config\productsdb;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('productsdb.pasta');
        foreach($products as $product){
            $newProduct = new Product();
            $newProduct->src = $product['src'];
            $newProduct->src_h = $product['src-h'];
            $newProduct->src_p = $product['src-p'];
            $newProduct->title = $product['titolo'];
            $newProduct->type = $product['tipo'];
            $newProduct->cooking_time = $product['cottura'];
            $newProduct->weight = $product['peso'];
            $newProduct->description = $product['descrizione'];
            $newProduct->save();
        }
    }
}
