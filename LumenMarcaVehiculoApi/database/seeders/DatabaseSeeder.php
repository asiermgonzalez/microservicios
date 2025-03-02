<?php

namespace Database\Seeders;

use Database\Factories\MarcaVehiculoFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MarcaVehiculoFactory::new()->count(20)->create();
    }
}
