<?php

namespace App\Containers\AppSection\Financiamiento\Data\Factories;

use App\Containers\AppSection\Financiamiento\Models\Financiamiento;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class FinanciamientoFactory extends ParentFactory
{
    protected $model = Financiamiento::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            'nombre' => $this->faker->name(),
        ];
    }
}
