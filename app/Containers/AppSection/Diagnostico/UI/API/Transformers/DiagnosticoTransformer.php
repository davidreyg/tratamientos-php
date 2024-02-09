<?php

namespace App\Containers\AppSection\Diagnostico\UI\API\Transformers;

use App\Containers\AppSection\Diagnostico\Models\Diagnostico;
use App\Containers\AppSection\Empleado\UI\API\Transformers\EmpleadoTransformer;
use App\Containers\AppSection\Establecimiento\UI\API\Transformers\EstablecimientoTransformer;
use App\Containers\AppSection\Financiamiento\UI\API\Transformers\FinanciamientoTransformer;
use App\Containers\AppSection\Paciente\UI\API\Transformers\PacienteTransformer;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class DiagnosticoTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [
        'enfermedades',
        'paciente',
        'medico',
        'financiamiento',
        'establecimiento',
    ];

    protected array $availableIncludes = [
        'enfermedades',
        'paciente',
        'medico',
        'financiamiento',
        'establecimiento',
    ];

    public function transform(Diagnostico $diagnostico): array
    {
        $response = [
            'object' => $diagnostico->getResourceKey(),
            'id' => $diagnostico->getHashedKey(),
            'estado' => $diagnostico->estado,
            'observaciones' => $diagnostico->observaciones,
            'paciente_id' => $diagnostico->paciente_id,
            'motivo_finalizacion' => $diagnostico->motivo_finalizacion,
            'created_at' => $diagnostico->created_at,
        ];

        return $this->ifAdmin([
            'real_id' => $diagnostico->id,
            'updated_at' => $diagnostico->updated_at,
            'readable_created_at' => $diagnostico->created_at->diffForHumans(),
            'readable_updated_at' => $diagnostico->updated_at->diffForHumans(),
            // 'deleted_at' => $diagnostico->deleted_at,
        ], $response);
    }
    public function includeEnfermedades(Diagnostico $diagnostico)
    {
        return $this->collection($diagnostico->enfermedades, new EnfermedadTransformer());
    }

    public function includePaciente(Diagnostico $diagnostico)
    {
        return $this->item($diagnostico->paciente, new PacienteTransformer());
    }

    public function includeMedico(Diagnostico $diagnostico)
    {
        return $this->item($diagnostico->medico, new EmpleadoTransformer());
    }

    public function includeEstablecimiento(Diagnostico $diagnostico)
    {
        return $this->item($diagnostico->establecimiento, new EstablecimientoTransformer());
    }

    public function includeFinanciamiento(Diagnostico $diagnostico)
    {
        return $this->item($diagnostico->financiamiento, new FinanciamientoTransformer());
    }
}
