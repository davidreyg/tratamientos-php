<?php

namespace App\Containers\AppSection\Empleado\UI\API\Transformers;

use App\Containers\AppSection\Empleado\Models\Empleado;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class EmpleadoTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Empleado $empleado): array
    {
        $response = [
            'object' => $empleado->getResourceKey(),
            'id' => $empleado->getHashedKey(),
            'nombres' => $empleado->nombres,
            'apellido_paterno' => $empleado->apellido_paterno,
            'apellido_materno' => $empleado->apellido_materno,
            'numero_documento' => $empleado->numero_documento,
            'fecha_nacimiento' => $empleado->fecha_nacimiento,
            'edad' => $empleado->edad,
            'sexo' => $empleado->sexo,
            'direccion' => $empleado->direccion,
            'telefono' => $empleado->telefono,
            'historia_clinica' => $empleado->historia_clinica,
            'tipo_documento' => $empleado->tipo_documento->nombre,
            'tipo_documento_id' => $empleado->tipo_documento_id,
        ];

        return $this->ifAdmin([
            'real_id' => $empleado->id,
            'created_at' => $empleado->created_at,
            'updated_at' => $empleado->updated_at,
            'readable_created_at' => $empleado->created_at->diffForHumans(),
            'readable_updated_at' => $empleado->updated_at->diffForHumans(),
            // 'deleted_at' => $empleado->deleted_at,
        ], $response);
    }
}
