<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('environments')->insert([
            'environment_name' => 'Patio',
            'environment_main_image' => 'mainpatio.jpg',
            'environment_description' => 'Breve  descripción del Patio',
        ]);

        DB::table('environments')->insert([
            'environment_name' => 'Sala',
            'environment_main_image' => 'mainsala.jpg',
            'environment_description' => 'Breve  descripción de la Sala',
        ]);

        DB::table('environments')->insert([
            'environment_name' => 'Dormitorio',
            'environment_main_image' => 'maindormitorio.jpg',
            'environment_description' => 'Breve  descripción del Dormitorio',
        ]);

        DB::table('environments')->insert([
            'environment_name' => 'Cocina',
            'environment_main_image' => 'maincocina.jpg',
            'environment_description' => 'Breve  descripción de la Cocina',
        ]);

        DB::table('environments')->insert([
            'environment_name' => 'Baño',
            'environment_main_image' => 'mainbano.jpg',
            'environment_description' => 'Breve  descripción del Baño',
        ]);
    }
}
