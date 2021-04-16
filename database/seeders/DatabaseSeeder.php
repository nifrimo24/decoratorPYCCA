<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EnvironmentSeeder::class,
            ProductCategorySeeder::class,
            ProductSeeder::class,
            EnvironmentImageSeeder::class,
        ]);
    }
}

