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
            'nombre' => $this->faker->word(),
            'codigo' => $this->faker->randomNumber(6),
            'direccion' => $this->faker->streetAddress(),
            'telefono' => $this->faker->randomNumber(9, true),
            'ris' => $this->faker->country(),
            'has_lab' => $this->faker->randomElement([true, false]),
        ];
    }
}
