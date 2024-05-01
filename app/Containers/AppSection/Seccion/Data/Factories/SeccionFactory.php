<?php

namespace App\Containers\AppSection\Seccion\Data\Factories;

use App\Containers\AppSection\Seccion\Models\Seccion;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class SeccionFactory extends ParentFactory
{
    protected $model = Seccion::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
