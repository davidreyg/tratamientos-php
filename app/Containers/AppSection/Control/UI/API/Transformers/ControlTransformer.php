<?php

namespace App\Containers\AppSection\Control\UI\API\Transformers;

use App\Containers\AppSection\Control\Models\Control;
use App\Containers\AppSection\Diagnostico\UI\API\Transformers\DiagnosticoTransformer;
use App\Containers\AppSection\Empleado\UI\API\Transformers\EmpleadoTransformer;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class ControlTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [
        'medico',
        'diagnostico',
        'complicaciones',
        'medicamentos',
    ];

    protected array $availableIncludes = [
        'medico',
        'diagnostico',
        'complicaciones',
        'medicamentos',
    ];

    public function transform(Control $control): array
    {
        $response = [
            'object' => $control->getResourceKey(),
            'id' => $control->getHashedKey(),
            'observaciones' => $control->observaciones,
            'fecha_inicio' => $control->fecha_inicio,
            'fecha_fin' => $control->fecha_fin,
        ];

        return $this->ifAdmin([
            'real_id' => $control->id,
            // 'created_at' => $control->created_at,
            // 'updated_at' => $control->updated_at,
            // 'readable_created_at' => $control->created_at->diffForHumans(),
            // 'readable_updated_at' => $control->updated_at->diffForHumans(),
            // 'deleted_at' => $control->deleted_at,
        ], $response);
    }


    public function includeMedico(Control $control)
    {
        return $this->item($control->medico, new EmpleadoTransformer());
    }

    public function includeDiagnostico(Control $control)
    {
        return $this->item($control->diagnostico, new DiagnosticoTransformer());
    }

    public function includeComplicaciones(Control $control)
    {
        return $this->collection($control->complicaciones, new ComplicacionTransformer());
    }

    public function includeMedicamentos(Control $control)
    {
        return $this->collection($control->medicamentos, new MedicamentoTransformer());
    }
}
