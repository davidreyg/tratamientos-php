<?php

namespace App\Containers\AppSection\Triaje\Data\Factories;

use App\Containers\AppSection\Triaje\Models\Triaje;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class TriajeFactory extends ParentFactory
{
    protected $model = Triaje::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
