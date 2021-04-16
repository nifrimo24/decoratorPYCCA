<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EnvironmentImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('environments_images')->insert([
            'environment_id' => 1,

            'image_description' => 'Breve descripción de Ambiente-Patio 1',
            'image_url' => 'environment-patio1.jpg',
        ]);

        \DB::table('environments_images')->insert([
            'environment_id' => 1,

            'image_description' => 'Breve descripción de Ambiente-Patio 2',
            'image_url' => 'environment-patio2.jpg',
        ]);

        \DB::table('environments_images')->insert([
            'environment_id' => 2,

            'image_description' => 'Breve descripción de Ambiente-Sala 1',
            'image_url' => 'environment-sala1.jpg',
        ]);

        \DB::table('environments_images')->insert([
            'environment_id' => 2,

            'image_description' => 'Breve descripción de Ambiente-Sala 2',
            'image_url' => 'environment-sala2.jpg',
        ]);

        \DB::table('environments_images')->insert([
            'environment_id' => 3,

            'image_description' => 'Breve descripción de Ambiente-Dormitorio 1',
            'image_url' => 'environment-dormitorio1.jpg',
        ]);

        \DB::table('environments_images')->insert([
            'environment_id' => 3,

            'image_description' => 'Breve descripción de Ambiente-Dormitorio 2',
            'image_url' => 'environment-dormitorio2.jpg',
        ]);

        \DB::table('environments_images')->insert([
            'environment_id' => 4,

            'image_description' => 'Breve descripción de Ambiente-Cocina 1',
            'image_url' => 'environment-cocina1.jpg',
        ]);

        \DB::table('environments_images')->insert([
            'environment_id' => 4,

            'image_description' => 'Breve descripción de Ambiente-Cocina 2',
            'image_url' => 'environment-cocina2.jpg',
        ]);

        \DB::table('environments_images')->insert([
            'environment_id' => 5,

            'image_description' => 'Breve descripción de Ambiente-Baños 1',
            'image_url' => 'environment-bano1.jpg',
        ]);

        \DB::table('environments_images')->insert([
            'environment_id' => 5,

            'image_description' => 'Breve descripción de Ambiente-Baños 2',
            'image_url' => 'environment-bano2.jpg',
        ]);

    }
}
