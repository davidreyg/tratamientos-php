<?php

namespace App\Containers\AppSection\Persona\UI\API\Transformers;

use App\Containers\AppSection\Persona\Models\TipoDocumento;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class TipoDocumentoTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(TipoDocumento $tipo_documento): array
    {
        $response = [
            'object' => $tipo_documento->getResourceKey(),
            'id' => $tipo_documento->id,
            'nombre' => $tipo_documento->nombre,
            'digitos' => $tipo_documento->digitos,

        ];

        return $this->ifAdmin([
            'real_id' => $tipo_documento->id,
        ], $response);
    }
}
