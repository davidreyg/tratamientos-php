<?php

namespace App\Containers\AppSection\Triaje\UI\API\Transformers;

use App\Containers\AppSection\Triaje\Models\Signo;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class SignoTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [
        // 'pivot'
    ];

    protected array $availableIncludes = [
        // 'pivot'
    ];

    public function transform(Signo $signo): array
    {
        $response = [
            'object' => $signo->getResourceKey(),
            'id' => $signo->getHashedKey(),
            'nombre' => $signo->nombre,
            'codigo' => $signo->codigo,
            'unidad' => $signo->unidad,
            'minimo' => $signo->minimo,
            'maximo' => $signo->maximo,
            'is_required' => $signo->is_required,
            'estado' => $signo->estado,
            'pivot' => $signo->pivot,
        ];

        return $this->ifAdmin([
            'real_id' => $signo->id,
        ], $response);
    }

    // public function includePivot(Signo $signo)
    // {
    //     return $this->collection($signo->signos, new SignoTransformer());
    // }
}
