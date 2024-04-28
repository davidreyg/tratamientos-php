<?php

namespace App\Containers\AppSection\Examen\UI\API\Transformers;

use App\Containers\AppSection\Examen\Models\Examen;
use App\Containers\AppSection\Item\UI\API\Transformers\ItemTransformer;
use App\Containers\AppSection\Respuesta\Models\Respuesta;
use App\Containers\AppSection\Respuesta\UI\API\Transformers\RespuestaTransformer;
use App\Containers\AppSection\Unidad\UI\API\Transformers\UnidadTransformer;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class ExamenTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [
        'categoria',
        'unidads',
        'items',
        'respuestas',
    ];

    protected array $availableIncludes = [
        'categoria',
        'unidads',
        'items',
        'respuestas',
    ];

    public function transform(Examen $examen): array
    {
        $response = [
            'object' => $examen->getResourceKey(),
            'id' => $examen->getHashedKey(),
            'nombre' => $examen->nombre,
            'precio' => $examen->precio,
            'codigo' => $examen->codigo,
            'categoria_id' => $examen->categoria_id,
            'is_active' => $examen->is_active,
            'tipo' => $examen->tipo,
            'pivot' => $examen->unidads->map(function ($unidad) {
                return [
                    'examen_id' => $unidad->pivot->examen_id,
                    'unidad_id' => $unidad->pivot->unidad_id,
                    'minimo' => $unidad->pivot->minimo,
                    'maximo' => $unidad->pivot->maximo
                ];
            }),
            'respuesta_ids' => $examen->respuestas->map(function (Respuesta $respuesta) {
                return $respuesta->id;
            }),
            'ordens_count' => $examen->ordens_count,

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
    public function includeRespuestas(Examen $examen)
    {
        return $this->collection($examen->respuestas, new RespuestaTransformer());
    }
}
