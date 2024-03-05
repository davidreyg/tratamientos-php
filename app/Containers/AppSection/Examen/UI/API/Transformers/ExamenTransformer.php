<?php

namespace App\Containers\AppSection\Examen\UI\API\Transformers;

use App\Containers\AppSection\Examen\Models\Examen;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class ExamenTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [
        'categoria',
    ];

    protected array $availableIncludes = [
        'categoria',
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
            'categoria_id' => $examen->categoria_id,
        ];

        return $this->ifAdmin([
            'real_id' => $examen->id,
        ], $response);
    }

    public function includeCategoria(Examen $examen)
    {
        return $this->item($examen->categoria, new CategoriaTransformer());
    }
}
