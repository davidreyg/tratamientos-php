<?php

namespace App\Containers\AppSection\Triaje\UI\API\Transformers;

use App\Containers\AppSection\Triaje\Models\Triaje;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class TriajeTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [
        // 'signos'
    ];

    protected array $availableIncludes = [
        // 'signos'
    ];

    public function transform(Triaje $triaje): array
    {
        $response = [
            'object' => $triaje->getResourceKey(),
            'id' => $triaje->getHashedKey(),
            'fecha_registro' => $triaje->fecha_registro,
            'user_id' => $triaje->user_id,
            'paciente_id' => $triaje->paciente_id,
            'xd' => $triaje->signos->map(function ($signo) use ($triaje) {
                return [
                    'triaje_id' => $triaje->id,
                    'signo_id' => $signo->id,
                    'valor' => $signo->pivot->valor
                ];
            })
            ,
        ];

        return $this->ifAdmin([
            'real_id' => $triaje->id,
        ], $response);
    }

    public function includeSignos(Triaje $triaje)
    {
        return $this->collection($triaje->signos, new SignoTransformer());
    }
}
