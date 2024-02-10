<?php

namespace App\Containers\AppSection\Authorization\UI\API\Transformers;

use App\Containers\AppSection\Authorization\Models\Privilegio;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class PrivilegioTransformer extends ParentTransformer
{
    protected array $availableIncludes = [
    ];

    protected array $defaultIncludes = [
        // 'permissions',
    ];

    public function transform(Privilegio $privilegio): array
    {
        $response = [
            'object' => $privilegio->getResourceKey(),
            'id' => $privilegio->getHashedKey(), // << Unique Identifier
            'nombre' => $privilegio->nombre, // << Unique Identifier
            'descripcion' => $privilegio->descripcion,
            'ruta' => $privilegio->ruta,
            'icono' => $privilegio->icono,
            'parent_id' => $privilegio->parent_id,
            // 'display_name' => $privilegio->display_name,
        ];

        return $this->ifAdmin([
            // 'guard_name' => $privilegio->guard_name,
        ], $response);
    }
}
