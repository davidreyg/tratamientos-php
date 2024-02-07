<?php

namespace App\Containers\AppSection\Control\UI\API\Transformers;

use App\Containers\AppSection\Control\Models\Medicamento;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class MedicamentoTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Medicamento $medicamento): array
    {
        $response = [
            'object' => $medicamento->getResourceKey(),
            'id' => $medicamento->getHashedKey(),
            'nombre' => $medicamento->nombre,
            'codigo' => $medicamento->codigo,
        ];

        return $this->ifAdmin([
            'real_id' => $medicamento->id,
        ], $response);
    }
}
