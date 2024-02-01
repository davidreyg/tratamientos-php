<?php

namespace App\Containers\AppSection\Persona\UI\API\Transformers;

use App\Containers\AppSection\Persona\Models\Persona;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class PersonaTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Persona $persona): array
    {
        $response = [
            'object' => $persona->getResourceKey(),
            'id' => $persona->getHashedKey(),
            'nombres' => $persona->nombres,
            'apellido_paterno' => $persona->apellido_paterno,
            'apellido_materno' => $persona->apellido_materno,
            'numero_documento' => $persona->numero_documento,
            'fecha_nacimiento' => $persona->fecha_nacimiento,
            'edad' => $persona->edad,
            'sexo' => $persona->sexo,
            'direccion' => $persona->direccion,
            'telefono' => $persona->telefono,
            'historia_clinica' => $persona->historia_clinica,

        ];

        return $this->ifAdmin([
            'real_id' => $persona->id,
            // 'created_at' => $persona->created_at,
            // 'updated_at' => $persona->updated_at,
            // 'readable_created_at' => $persona->created_at->diffForHumans(),
            // 'readable_updated_at' => $persona->updated_at->diffForHumans(),
            // 'deleted_at' => $persona->deleted_at,
        ], $response);
    }
}
