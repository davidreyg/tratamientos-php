<?php

namespace App\Containers\AppSection\Establecimiento\Data\Factories;

use App\Containers\AppSection\Establecimiento\Models\Establecimiento;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class EstablecimientoFactory extends ParentFactory
{
    protected $model = Establecimiento::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}