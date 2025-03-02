<?php

namespace Database\Factories;

use App\Models\MarcaVehiculo;
use Illuminate\Database\Eloquent\Factories\Factory;

class MarcaVehiculoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MarcaVehiculo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
