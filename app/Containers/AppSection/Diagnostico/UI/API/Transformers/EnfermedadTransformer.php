<?php

namespace App\Containers\AppSection\Diagnostico\UI\API\Transformers;

use App\Containers\AppSection\Diagnostico\Models\Enfermedad;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class EnfermedadTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Enfermedad $enfermedad): array
    {
        $response = [
            'object' => $enfermedad->getResourceKey(),
            'id' => $enfermedad->getHashedKey(),
            'nombre' => $enfermedad->nombre,
        ];

        return $this->ifAdmin([
            'real_id' => $enfermedad->id,
        ], $response);
    }
}
