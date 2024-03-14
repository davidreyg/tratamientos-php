<?php

namespace App\Containers\AppSection\Unidad\UI\API\Transformers;

use App\Containers\AppSection\Unidad\Models\Unidad;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class UnidadTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Unidad $unidad): array
    {
        $response = [
            'object' => $unidad->getResourceKey(),
            'id' => $unidad->getHashedKey(),
            'nombre' => $unidad->nombre,
        ];

        return $this->ifAdmin([
            'real_id' => $unidad->id,
        ], $response);
    }
}
