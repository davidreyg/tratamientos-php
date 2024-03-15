<?php

namespace App\Containers\AppSection\Orden\UI\API\Transformers;

use App\Containers\AppSection\Examen\UI\API\Transformers\ExamenTransformer;
use App\Containers\AppSection\Orden\Models\Orden;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;
use League\Fractal\Resource\Collection;

class OrdenTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [
        'examens'
    ];

    protected array $availableIncludes = [
        'examens'
    ];

    public function transform(Orden $orden): array
    {
        $response = [
            'object' => $orden->getResourceKey(),
            'id' => $orden->getHashedKey(),
            'diagnostico' => $orden->diagnostico,
            'CI10' => $orden->CI10,
            'CPN' => $orden->CPN,
            'EG' => $orden->EG,
            'codigo_atencion' => $orden->codigo_atencion,
            'fecha_registro' => $orden->fecha_registro,
            'medico' => $orden->medico,
            'estado' => $orden->estado,
            'estado_detalle' => $orden->estado_detalle,
            'establecimiento_id' => $orden->establecimiento_id,
            'establecimiento_otro' => $orden->establecimiento_otro,
            'pivot' => $orden->examens->map(function ($examen) use ($orden) {
                return [
                    'orden_id' => $orden->id,
                    'examen_id' => $examen->id,
                    'resultado' => $examen->pivot->resultado,
                    'fecha_resultado' => $examen->pivot->fecha_resultado,
                    'unidad_id' => $examen->pivot->unidad_id,
                    'is_canceled' => (bool) $examen->pivot->is_canceled,
                    'motivo' => $examen->pivot->motivo,
                    'is_completed' => $examen->pivot->is_completed,
                ];
            })
        ];

        return $this->ifAdmin([
            'real_id' => $orden->id,
        ], $response);
    }

    public function includeExamens(Orden $orden): Collection
    {
        return $this->collection($orden->examens, new ExamenTransformer());
    }
}
