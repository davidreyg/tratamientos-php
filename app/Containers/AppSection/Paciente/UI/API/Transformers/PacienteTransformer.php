<?php

namespace App\Containers\AppSection\Paciente\UI\API\Transformers;

use App\Containers\AppSection\Paciente\Models\Paciente;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class PacienteTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Paciente $paciente): array
    {
        $response = [
            'object' => $paciente->getResourceKey(),
            'id' => $paciente->getHashedKey(),
            'nombres' => $paciente->nombres,
            'apellido_paterno' => $paciente->apellido_paterno,
            'apellido_materno' => $paciente->apellido_materno,
            'numero_documento' => $paciente->numero_documento,
            'fecha_nacimiento' => $paciente->fecha_nacimiento,
            'edad' => $paciente->edad,
            'sexo' => $paciente->sexo,
            'direccion' => $paciente->direccion,
            'telefono' => $paciente->telefono,
            'historia_clinica' => $paciente->historia_clinica,
            'tipo_documento' => $paciente->tipo_documento->nombre,
            'tipo_documento_id' => $paciente->tipo_documento_id,
        ];

        return $this->ifAdmin([
            'real_id' => $paciente->id,
        ], $response);
    }
}
