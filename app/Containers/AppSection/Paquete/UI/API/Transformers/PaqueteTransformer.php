<?php

namespace App\Containers\AppSection\Paquete\UI\API\Transformers;

use App\Containers\AppSection\Paquete\Models\Paquete;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class PaqueteTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Paquete $paquete): array
    {
        $response = [
            'object' => $paquete->getResourceKey(),
            'id' => $paquete->getHashedKey(),
            'nombre' => $paquete->nombre,
            'examen_ids' => $paquete->examens->map(function ($signo) {
                return $signo->pivot->examen_id;
            })
        ];

        return $this->ifAdmin([
            'real_id' => $paquete->id,
        ], $response);
    }
}
