<?php

namespace App\Containers\AppSection\Cargo\UI\API\Transformers;

use App\Containers\AppSection\Cargo\Models\Cargo;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class CargoTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Cargo $cargo): array
    {
        $response = [
            'object' => $cargo->getResourceKey(),
            'id' => $cargo->getHashedKey(),
            'nombre' => $cargo->nombre,
        ];

        return $this->ifAdmin([
            'real_id' => $cargo->id,
        ], $response);
    }
}
