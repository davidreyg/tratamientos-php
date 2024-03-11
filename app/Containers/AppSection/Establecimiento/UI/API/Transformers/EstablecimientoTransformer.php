<?php

namespace App\Containers\AppSection\Establecimiento\UI\API\Transformers;

use App\Containers\AppSection\Establecimiento\Models\Establecimiento;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class EstablecimientoTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Establecimiento $establecimiento): array
    {
        $response = [
            'object' => $establecimiento->getResourceKey(),
            'id' => $establecimiento->getHashedKey(),
            'nombre' => $establecimiento->nombre,
            'codigo' => $establecimiento->codigo,
            'direccion' => $establecimiento->direccion,
            'telefono' => $establecimiento->telefono,
            'ris' => $establecimiento->ris,
            'has_lab' => $establecimiento->has_lab,
        ];

        return $this->ifAdmin([
            'real_id' => $establecimiento->id,
            // 'created_at' => $establecimiento->created_at,
            // 'updated_at' => $establecimiento->updated_at,
            // 'readable_created_at' => $establecimiento->created_at->diffForHumans(),
            // 'readable_updated_at' => $establecimiento->updated_at->diffForHumans(),
            // 'deleted_at' => $establecimiento->deleted_at,
        ], $response);
    }
}
