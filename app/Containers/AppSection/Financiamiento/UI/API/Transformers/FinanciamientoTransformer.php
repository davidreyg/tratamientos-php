<?php

namespace App\Containers\AppSection\Financiamiento\UI\API\Transformers;

use App\Containers\AppSection\Financiamiento\Models\Financiamiento;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class FinanciamientoTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Financiamiento $financiamiento): array
    {
        $response = [
            'object' => $financiamiento->getResourceKey(),
            'id' => $financiamiento->getHashedKey(),
            'nombre' => $financiamiento->nombre,
        ];

        return $this->ifAdmin([
            'real_id' => $financiamiento->id,
        ], $response);
    }
}
