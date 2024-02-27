<?php

namespace App\Containers\AppSection\Paquete\Data\Factories;

use App\Containers\AppSection\Paquete\Models\Paquete;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class PaqueteFactory extends ParentFactory
{
    protected $model = Paquete::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
