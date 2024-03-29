<?php

namespace App\Containers\AppSection\Item\UI\API\Transformers;

use App\Containers\AppSection\Item\Models\Item;
use App\Containers\AppSection\Unidad\UI\API\Transformers\UnidadTransformer;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class ItemTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [
        'unidads',
    ];

    protected array $availableIncludes = [
        'unidads',
    ];

    public function transform(Item $item): array
    {
        $response = [
            'object' => $item->getResourceKey(),
            'id' => $item->getHashedKey(),
            'nombre' => $item->nombre,
            'seccion_id' => $item->seccion_id,
            'examen_id' => $item->examen_id,
            'pivot' => $item->unidads->map(function ($unidad) {
                return [
                    'item_id' => $unidad->pivot->item_id,
                    'unidad_id' => $unidad->pivot->unidad_id,
                    'minimo' => $unidad->pivot->minimo,
                    'maximo' => $unidad->pivot->maximo
                ];
            })
        ];

        return $this->ifAdmin([
            'real_id' => $item->id,
        ], $response);
    }

    public function includeUnidads(Item $item)
    {
        return $this->collection($item->unidads, new UnidadTransformer());
    }
}
