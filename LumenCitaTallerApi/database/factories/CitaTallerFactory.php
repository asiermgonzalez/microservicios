<?php

namespace Database\Factories;

use App\Models\CitaTaller;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitaTallerFactory extends Factory
{
    protected $model = CitaTaller::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5, true),
            'marca_vehiculo_id' => $this->faker->numberBetween(1, 20),
        ];
    }
}
