<?php

namespace App\Containers\AppSection\TipoDocumento\UI\API\Transformers;

use App\Containers\AppSection\TipoDocumento\Models\TipoDocumento;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class TipoDocumentoTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(TipoDocumento $tipodocumento): array
    {
        $response = [
            'object' => $tipodocumento->getResourceKey(),
            'id' => $tipodocumento->getHashedKey(),
            'nombre' => $tipodocumento->nombre,
            'digitos' => $tipodocumento->digitos,
        ];

        return $this->ifAdmin([
            'real_id' => $tipodocumento->id,
        ], $response);
    }
}
