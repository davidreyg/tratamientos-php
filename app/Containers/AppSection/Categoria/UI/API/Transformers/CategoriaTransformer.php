<?php

namespace App\Containers\AppSection\Categoria\UI\API\Transformers;

use App\Containers\AppSection\Categoria\Models\Categoria;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class CategoriaTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Categoria $categoria): array
    {
        $response = [
            'object' => $categoria->getResourceKey(),
            'id' => $categoria->getHashedKey(),
            'nombre' => $categoria->nombre,
        ];

        return $this->ifAdmin([
            'real_id' => $categoria->id,
        ], $response);
    }

}
