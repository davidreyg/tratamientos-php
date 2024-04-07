<?php

namespace App\Containers\AppSection\Orden\UI\API\Transformers;

use App\Containers\AppSection\Establecimiento\UI\API\Transformers\EstablecimientoTransformer;
use App\Containers\AppSection\Examen\UI\API\Transformers\ExamenTransformer;
use App\Containers\AppSection\Item\UI\API\Transformers\ItemTransformer;
use App\Containers\AppSection\Orden\Models\Orden;
use App\Containers\AppSection\Paciente\UI\API\Transformers\PacienteTransformer;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;
use League\Fractal\Resource\Collection;

class OrdenTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [
        'examens',
        'establecimiento',
        'paciente',
        'items',
    ];

    protected array $availableIncludes = [
        'examens',
        'establecimiento',
        'paciente',
        'items',
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
            'observaciones' => $orden->observaciones,
            'estado_detalle' => $orden->estado_detalle,
            'establecimiento_id' => $orden->establecimiento_id,
            'paciente_id' => $orden->paciente_id,
            'establecimiento_otro' => $orden->establecimiento_otro,
            'pivot' => $orden->examens->map(function ($examen) use ($orden) {
                return [
                    'orden_id' => $orden->id,
                    'examen_id' => $examen->id,
                    'resultado' => $examen->pivot->resultado,
                    'respuesta_id' => $examen->pivot->respuesta_id,
                    'fecha_resultado' => $examen->pivot->fecha_resultado,
                    'unidad_id' => $examen->pivot->unidad_id,
                    'is_canceled' => (bool) $examen->pivot->is_canceled,
                    'motivo' => $examen->pivot->motivo,
                    'is_completed' => $examen->pivot->is_completed,
                ];
            }),
            'item_orden' => $orden->items->map(function ($item) use ($orden) {
                return [
                    'orden_id' => $item->item_orden->orden_id,
                    'item_id' => $item->item_orden->item_id,
                    'resultado' => $item->item_orden->resultado,
                    'unidad_id' => $item->item_orden->unidad_id,
                    'is_canceled' => (bool) $item->item_orden->is_canceled,
                ];
            }),
            'examen_ids' => $orden->examens->map(function ($examen) {
                return $examen->id;
            }),
            'item_ids' => $orden->items->map(function ($item) {
                return $item->id;
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

    public function includeItems(Orden $orden): Collection
    {
        return $this->collection($orden->items, new ItemTransformer());
    }

    public function includeEstablecimiento(Orden $orden)
    {
        return $this->nullableItem($orden->establecimiento, new EstablecimientoTransformer());
    }
    public function includePaciente(Orden $orden)
    {
        return $this->item($orden->paciente, new PacienteTransformer());
    }
}
