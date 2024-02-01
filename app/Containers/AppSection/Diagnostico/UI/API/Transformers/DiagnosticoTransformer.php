<?php

namespace App\Containers\AppSection\Diagnostico\UI\API\Transformers;

use App\Containers\AppSection\Diagnostico\Models\Diagnostico;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class DiagnosticoTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Diagnostico $diagnostico): array
    {
        $response = [
            'object' => $diagnostico->getResourceKey(),
            'id' => $diagnostico->getHashedKey(),
            'descripcion' => $diagnostico->descripcion,
            'observaciones' => $diagnostico->observaciones,
        ];

        return $this->ifAdmin([
            'real_id' => $diagnostico->id,
            'created_at' => $diagnostico->created_at,
            'updated_at' => $diagnostico->updated_at,
            'readable_created_at' => $diagnostico->created_at->diffForHumans(),
            'readable_updated_at' => $diagnostico->updated_at->diffForHumans(),
            // 'deleted_at' => $diagnostico->deleted_at,
        ], $response);
    }
}
