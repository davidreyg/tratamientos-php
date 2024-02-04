<?php

namespace App\Containers\AppSection\Control\UI\API\Transformers;

use App\Containers\AppSection\Control\Models\Complicacion;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class ComplicacionTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Complicacion $complicacion): array
    {
        $response = [
            'object' => $complicacion->getResourceKey(),
            'id' => $complicacion->getHashedKey(),
            'nombre' => $complicacion->nombre,
        ];

        return $this->ifAdmin([
            'real_id' => $complicacion->id,
        ], $response);
    }
}
