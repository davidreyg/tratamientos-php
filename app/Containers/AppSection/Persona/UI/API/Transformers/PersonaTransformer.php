<?php

namespace App\Containers\AppSection\Persona\UI\API\Transformers;

use App\Containers\AppSection\Diagnostico\UI\API\Transformers\DiagnosticoTransformer;
use App\Containers\AppSection\Persona\Models\Persona;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class PersonaTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [
        // 'diagnosticos'
    ];

    protected array $availableIncludes = [
        'diagnosticos'
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
            'tipo_documento' => $persona->tipo_documento->nombre,
            'tipo_documento_id' => $persona->tipo_documento_id,
            'tipo_persona' => $persona->tipo_persona->nombre,
            'tipo_persona_id' => $persona->tipo_persona_id,

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

    public function includeDiagnosticos(Persona $persona)
    {
        return $this->collection($persona->diagnosticos, new DiagnosticoTransformer());
    }
}
