<?php

namespace App\Containers\AppSection\Diagnostico\UI\API\Transformers;

use App\Containers\AppSection\Diagnostico\Models\Diagnostico;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class DiagnosticoTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [
        'enfermedades'
    ];

    protected array $availableIncludes = [
        'enfermedades'
    ];

    public function transform(Diagnostico $diagnostico): array
    {
        $response = [
            'object' => $diagnostico->getResourceKey(),
            'id' => $diagnostico->getHashedKey(),
            'estado' => $diagnostico->estado,
            'observaciones' => $diagnostico->observaciones,
            'paciente_id' => $diagnostico->paciente_id,
            'created_at' => $diagnostico->created_at,
        ];

        return $this->ifAdmin([
            'real_id' => $diagnostico->id,
            'updated_at' => $diagnostico->updated_at,
            'readable_created_at' => $diagnostico->created_at->diffForHumans(),
            'readable_updated_at' => $diagnostico->updated_at->diffForHumans(),
            // 'deleted_at' => $diagnostico->deleted_at,
        ], $response);
    }
    public function includeEnfermedades(Diagnostico $diagnostico)
    {
        return $this->collection($diagnostico->enfermedades, new EnfermedadTransformer());
    }
}
