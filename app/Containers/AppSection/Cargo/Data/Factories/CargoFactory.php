<?php

namespace App\Containers\AppSection\Cargo\Data\Factories;

use App\Containers\AppSection\Cargo\Models\Cargo;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class CargoFactory extends ParentFactory
{
    protected $model = Cargo::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
