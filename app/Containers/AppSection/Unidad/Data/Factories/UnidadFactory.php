<?php

namespace App\Containers\AppSection\Unidad\Data\Factories;

use App\Containers\AppSection\Unidad\Models\Unidad;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class UnidadFactory extends ParentFactory
{
    protected $model = Unidad::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
