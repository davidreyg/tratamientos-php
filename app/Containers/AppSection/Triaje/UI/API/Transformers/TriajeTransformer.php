<?php

namespace App\Containers\AppSection\Triaje\UI\API\Transformers;

use App\Containers\AppSection\Triaje\Models\Triaje;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class TriajeTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Triaje $triaje): array
    {
        $response = [
            'object' => $triaje->getResourceKey(),
            'id' => $triaje->getHashedKey(),
        ];

        return $this->ifAdmin([
            'real_id' => $triaje->id,
            'created_at' => $triaje->created_at,
            'updated_at' => $triaje->updated_at,
            'readable_created_at' => $triaje->created_at->diffForHumans(),
            'readable_updated_at' => $triaje->updated_at->diffForHumans(),
            // 'deleted_at' => $triaje->deleted_at,
        ], $response);
    }
}
