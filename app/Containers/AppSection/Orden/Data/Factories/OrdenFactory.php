<?php

namespace App\Containers\AppSection\Orden\Data\Factories;

use App\Containers\AppSection\Orden\Models\Orden;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class OrdenFactory extends ParentFactory
{
    protected $model = Orden::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
