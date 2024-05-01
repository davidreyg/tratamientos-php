<?php

namespace App\Containers\AppSection\Categoria\Data\Factories;

use App\Containers\AppSection\Categoria\Models\Categoria;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class CategoriaFactory extends ParentFactory
{
    protected $model = Categoria::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
