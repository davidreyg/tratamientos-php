<?php

namespace App\Containers\AppSection\Respuesta\UI\API\Transformers;

use App\Containers\AppSection\Respuesta\Models\Respuesta;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class RespuestaTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Respuesta $respuesta): array
    {
        $response = [
            'object' => $respuesta->getResourceKey(),
            'id' => $respuesta->getHashedKey(),
            'nombre' => $respuesta->nombre,
        ];

        return $this->ifAdmin([
            'real_id' => $respuesta->id,
        ], $response);
    }
}
