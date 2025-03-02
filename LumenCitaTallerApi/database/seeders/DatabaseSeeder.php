<?php

namespace Database\Seeders;

use App\Models\CitaTaller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        CitaTaller::factory(10)->create();
    }
}
