<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_categories')->insert([
            'product_category_name' => 'Mesas',
            'product_category_description' => 'Breve descripción de Mesas',
            'product_category_image' => 'mesas.jpg',
        ]);

        DB::table('products_categories')->insert([
            'product_category_name' => 'Accesorios',
            'product_category_description' => 'Breve descripción de Accesorios',
            'product_category_image' => 'accesorios.jpg',
        ]);

        DB::table('products_categories')->insert([
            'product_category_name' => 'Organizadores',
            'product_category_description' => 'Breve descripción de Organizadores',
            'product_category_image' => 'organizadores.jpg',
        ]);

        DB::table('products_categories')->insert([
            'product_category_name' => 'Paredes',
            'product_category_description' => 'Breve descripción de Paredes',
            'product_category_image' => 'paredes.jpg',
        ]);

        DB::table('products_categories')->insert([
            'product_category_name' => 'Muebles',
            'product_category_description' => 'Breve descripción de Muebles',
            'product_category_image' => 'muebles.jpg',
        ]);

        DB::table('products_categories')->insert([
            'product_category_name' => 'Electrodomésticos',
            'product_category_description' => 'Breve descripción de Electrodomésticos',
            'product_category_image' => 'electrodomesticos.jpg',
        ]);
    }
}
