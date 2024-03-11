<?php

namespace App\Containers\AppSection\Orden\UI\API\Transformers;

use App\Containers\AppSection\Orden\Models\Orden;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class OrdenTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Orden $orden): array
    {
        $response = [
            'object' => $orden->getResourceKey(),
            'id' => $orden->getHashedKey(),
            'diagnostico' => $orden->diagnostico,
            'CI10' => $orden->CI10,
            'CPN' => $orden->CPN,
            'EG' => $orden->EG,
            'codigo_atencion' => $orden->codigo_atencion,
            'fecha_registro' => $orden->fecha_registro,
            'medico' => $orden->medico,
        ];

        return $this->ifAdmin([
            'real_id' => $orden->id,
            // 'created_at' => $orden->created_at,
            // 'updated_at' => $orden->updated_at,
            // 'readable_created_at' => $orden->created_at->diffForHumans(),
            // 'readable_updated_at' => $orden->updated_at->diffForHumans(),
            // 'deleted_at' => $orden->deleted_at,
        ], $response);
    }
}
