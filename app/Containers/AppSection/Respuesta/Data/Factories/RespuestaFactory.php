<?php

namespace App\Containers\AppSection\Respuesta\Data\Factories;

use App\Containers\AppSection\Respuesta\Models\Respuesta;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class RespuestaFactory extends ParentFactory
{
    protected $model = Respuesta::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
