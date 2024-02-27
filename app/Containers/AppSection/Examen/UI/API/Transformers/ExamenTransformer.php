<?php

namespace App\Containers\AppSection\Examen\UI\API\Transformers;

use App\Containers\AppSection\Examen\Models\Examen;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class ExamenTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Examen $examen): array
    {
        $response = [
            'object' => $examen->getResourceKey(),
            'id' => $examen->getHashedKey(),
            'nombre' => $examen->nombre,
            // 'referencia' => $examen->referencia,
            'unidad' => $examen->unidad,
            'precio' => $examen->precio,
        ];

        return $this->ifAdmin([
            'real_id' => $examen->id,
        ], $response);
    }
}
