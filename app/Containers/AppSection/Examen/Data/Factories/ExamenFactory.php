<?php

namespace App\Containers\AppSection\Examen\Data\Factories;

use App\Containers\AppSection\Examen\Models\Examen;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class ExamenFactory extends ParentFactory
{
    protected $model = Examen::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
