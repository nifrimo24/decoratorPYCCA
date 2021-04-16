<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('products')->insert([
            'product_category_id' => 1,

            'product_name' => 'Mesa 1',
            'product_description' => 'Breve descripción de Mesa 1',
            'product_image' => 'mesa1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 1,

            'product_name' => 'Mesa 2',
            'product_description' => 'Breve descripción de Mesa 2',
            'product_image' => 'mesa1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 1,

            'product_name' => 'Mesa 3',
            'product_description' => 'Breve descripción de Mesa 3',
            'product_image' => 'mesa1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 1,

            'product_name' => 'Mesa 4',
            'product_description' => 'Breve descripción de Mesa 4',
            'product_image' => 'mesa1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 1,

            'product_name' => 'Mesa 5',
            'product_description' => 'Breve descripción de Mesa 5',
            'product_image' => 'mesa1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 2,

            'product_name' => 'Accesorio 1',
            'product_description' => 'Breve descripción de Accesorio 1',
            'product_image' => 'accesorio1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 2,

            'product_name' => 'Accesorio 2',
            'product_description' => 'Breve descripción de Accesorio 2',
            'product_image' => 'accesorio1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 2,

            'product_name' => 'Accesorio 3',
            'product_description' => 'Breve descripción de Accesorio 3',
            'product_image' => 'accesorio1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 2,

            'product_name' => 'Accesorio 4',
            'product_description' => 'Breve descripción de Accesorio 4',
            'product_image' => 'accesorio1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 2,

            'product_name' => 'Accesorio 5',
            'product_description' => 'Breve descripción de Accesorio 5',
            'product_image' => 'accesorio1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 3,

            'product_name' => 'Organizador 1',
            'product_description' => 'Breve descripción de Organizador 1',
            'product_image' => 'organizador1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 3,

            'product_name' => 'Organizador 2',
            'product_description' => 'Breve descripción de Organizador 2',
            'product_image' => 'organizador1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 3,

            'product_name' => 'Organizador 3',
            'product_description' => 'Breve descripción de Organizador 3',
            'product_image' => 'organizador1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 3,

            'product_name' => 'Organizador 4',
            'product_description' => 'Breve descripción de Organizador 4',
            'product_image' => 'organizador1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 3,

            'product_name' => 'Organizador 5',
            'product_description' => 'Breve descripción de Organizador 5',
            'product_image' => 'organizador1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 4,

            'product_name' => 'Pared 1',
            'product_description' => 'Breve descripción de Pared 1',
            'product_image' => 'pared1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 4,

            'product_name' => 'Pared 2',
            'product_description' => 'Breve descripción de Pared 2',
            'product_image' => 'pared1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 4,

            'product_name' => 'Pared 3',
            'product_description' => 'Breve descripción de Pared 3',
            'product_image' => 'pared1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 4,

            'product_name' => 'Pared 4',
            'product_description' => 'Breve descripción de Pared 4',
            'product_image' => 'pared1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 4,

            'product_name' => 'Pared 5',
            'product_description' => 'Breve descripción de Pared 5',
            'product_image' => 'pared1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 5,

            'product_name' => 'Mueble 1',
            'product_description' => 'Breve descripción de Mueble 1',
            'product_image' => 'mueble1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 5,

            'product_name' => 'Mueble 2',
            'product_description' => 'Breve descripción de Mueble 2',
            'product_image' => 'mueble1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 5,

            'product_name' => 'Mueble 3',
            'product_description' => 'Breve descripción de Mueble 3',
            'product_image' => 'mueble1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 5,

            'product_name' => 'Mueble 4',
            'product_description' => 'Breve descripción de Mueble 4',
            'product_image' => 'mueble1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 5,

            'product_name' => 'Mueble 5',
            'product_description' => 'Breve descripción de Mueble 5',
            'product_image' => 'mueble1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 6,

            'product_name' => 'Electrodoméstico 1',
            'product_description' => 'Breve descripción de Electrodoméstico 1',
            'product_image' => 'electrodomestico1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 6,

            'product_name' => 'Electrodoméstico 2',
            'product_description' => 'Breve descripción de Electrodoméstico 2',
            'product_image' => 'electrodomestico1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 6,

            'product_name' => 'Electrodoméstico 3',
            'product_description' => 'Breve descripción de Electrodoméstico 3',
            'product_image' => 'electrodomestico1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 6,

            'product_name' => 'Electrodoméstico 4',
            'product_description' => 'Breve descripción de Electrodoméstico 4',
            'product_image' => 'electrodomestico1.jpg',
        ]);

        \DB::table('products')->insert([
            'product_category_id' => 6,

            'product_name' => 'Electrodoméstico 5',
            'product_description' => 'Breve descripción de Electrodoméstico 5',
            'product_image' => 'electrodomestico1.jpg',
        ]);



    }
}
