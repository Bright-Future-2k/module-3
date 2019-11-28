<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new App\Product();
        $product->name = 'san pham 01';
        $product->description = 'san pham co ma 01';
        $product->price = 5000 ;
        $product->view_count = 0;
        $product->save();

        $product = new App\Product();
        $product->name = 'san pham 02';
        $product->description = 'san pham co ma 02';
        $product->price = 1000 ;
        $product->view_count = 0;
        $product->save();

        $product = new App\Product();
        $product->name = 'san pham 03';
        $product->description = 'sam pham co ma 03';
        $product->price = 1500 ;
        $product->view_count = 0;
        $product->save();
    }
}
