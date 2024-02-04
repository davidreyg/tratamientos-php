<?php

namespace App\Containers\AppSection\Control\UI\API\Transformers;

use App\Containers\AppSection\Control\Models\Control;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class ControlTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Control $control): array
    {
        $response = [
            'object' => $control->getResourceKey(),
            'id' => $control->getHashedKey(),
            'estado' => $control->estado,
            'fecha_inicio' => $control->fecha_inicio,
            'fecha_fin' => $control->fecha_fin,
        ];

        return $this->ifAdmin([
            'real_id' => $control->id,
            'created_at' => $control->created_at,
            'updated_at' => $control->updated_at,
            'readable_created_at' => $control->created_at->diffForHumans(),
            'readable_updated_at' => $control->updated_at->diffForHumans(),
            // 'deleted_at' => $control->deleted_at,
        ], $response);
    }
}
