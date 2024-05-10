<?php

namespace App\Containers\AppSection\Item\UI\API\Transformers;

use App\Containers\AppSection\Examen\UI\API\Transformers\ExamenTransformer;
use App\Containers\AppSection\Item\Models\Item;
use App\Containers\AppSection\Respuesta\Models\Respuesta;
use App\Containers\AppSection\Respuesta\UI\API\Transformers\RespuestaTransformer;
use App\Containers\AppSection\Seccion\UI\API\Transformers\SeccionTransformer;
use App\Containers\AppSection\Unidad\UI\API\Transformers\UnidadTransformer;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class ItemTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [
        'unidads',
        'respuestas',
        'seccion',
    ];

    protected array $availableIncludes = [
        'unidads',
        'respuestas',
        'seccion',
        'examen',
    ];

    public function transform(Item $item): array
    {
        $response = [
            'object' => $item->getResourceKey(),
            'id' => $item->getHashedKey(),
            'nombre' => $item->nombre,
            'codigo' => $item->codigo,
            'tipo' => $item->tipo,
            'seccion_id' => $item->seccion_id,
            'examen_id' => $item->examen_id,
            'pivot' => $item->unidads->map(function ($unidad) {
                return [
                    'item_id' => $unidad->pivot->item_id,
                    'unidad_id' => $unidad->pivot->unidad_id,
                    'minimo' => $unidad->pivot->minimo,
                    'maximo' => $unidad->pivot->maximo,
                    'tipo' => $unidad->pivot->tipo,
                    'operador' => $unidad->pivot->operador,
                ];
            }),
            'respuesta_ids' => $item->respuestas->map(function (Respuesta $respuesta) {
                return $respuesta->id;
            }),
        ];

        return $this->ifAdmin([
            'real_id' => $item->id,
        ], $response);
    }

    public function includeSeccion(Item $item)
    {
        return $this->item($item->seccion, new SeccionTransformer());
    }

    public function includeExamen(Item $item)
    {
        return $this->item($item->examen, new ExamenTransformer());
    }

    public function includeUnidads(Item $item)
    {
        return $this->collection($item->unidads, new UnidadTransformer());
    }

    public function includeRespuestas(Item $item)
    {
        return $this->collection($item->respuestas, new RespuestaTransformer());
    }
}
