<?php

namespace App\Containers\AppSection\Seccion\UI\API\Transformers;

use App\Containers\AppSection\Seccion\Models\Seccion;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class SeccionTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Seccion $seccion): array
    {
        $response = [
            'object' => $seccion->getResourceKey(),
            'id' => $seccion->getHashedKey(),
            'nombre' => $seccion->nombre,
        ];

        return $this->ifAdmin([
            'real_id' => $seccion->id,
        ], $response);
    }
}
