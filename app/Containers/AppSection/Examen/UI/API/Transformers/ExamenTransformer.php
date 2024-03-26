<?php

namespace App\Containers\AppSection\Examen\UI\API\Transformers;

use App\Containers\AppSection\Examen\Models\Examen;
use App\Containers\AppSection\Item\UI\API\Transformers\ItemTransformer;
use App\Containers\AppSection\Unidad\UI\API\Transformers\UnidadTransformer;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class ExamenTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [
        'categoria',
        'unidads',
        'items',
    ];

    protected array $availableIncludes = [
        'categoria',
        'unidads',
        'items',
    ];

    public function transform(Examen $examen): array
    {
        $response = [
            'object' => $examen->getResourceKey(),
            'id' => $examen->getHashedKey(),
            'nombre' => $examen->nombre,
            'precio' => $examen->precio,
            'categoria_id' => $examen->categoria_id,
            'is_active' => $examen->is_active,
            'pivot' => $examen->unidads->map(function ($unidad) {
                return [
                    'examen_id' => $unidad->pivot->examen_id,
                    'unidad_id' => $unidad->pivot->unidad_id,
                    'minimo' => $unidad->pivot->minimo,
                    'maximo' => $unidad->pivot->maximo
                ];
            })

        ];

        return $this->ifAdmin([
            'real_id' => $examen->id,
        ], $response);
    }

    public function includeCategoria(Examen $examen)
    {
        return $this->item($examen->categoria, new CategoriaTransformer());
    }

    public function includeUnidads(Examen $examen)
    {
        return $this->collection($examen->unidads, new UnidadTransformer());
    }

    public function includeItems(Examen $examen)
    {
        return $this->collection($examen->items, new ItemTransformer());
    }
}
