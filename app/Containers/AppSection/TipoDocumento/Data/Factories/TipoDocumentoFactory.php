<?php

namespace App\Containers\AppSection\TipoDocumento\Data\Factories;

use App\Containers\AppSection\TipoDocumento\Models\TipoDocumento;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class TipoDocumentoFactory extends ParentFactory
{
    protected $model = TipoDocumento::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
