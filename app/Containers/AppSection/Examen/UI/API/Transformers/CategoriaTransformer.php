<?php

namespace App\Containers\AppSection\Examen\UI\API\Transformers;

use App\Containers\AppSection\Examen\Models\Categoria;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class CategoriaTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Categoria $examen): array
    {
        $response = [
            'object' => $examen->getResourceKey(),
            'id' => $examen->getHashedKey(),
            'nombre' => $examen->nombre,
        ];

        return $this->ifAdmin([
            'real_id' => $examen->id,
        ], $response);
    }
}
