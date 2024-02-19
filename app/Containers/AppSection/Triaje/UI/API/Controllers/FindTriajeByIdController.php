<?php

namespace App\Containers\AppSection\Triaje\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Triaje\Actions\FindTriajeByIdAction;
use App\Containers\AppSection\Triaje\UI\API\Requests\FindTriajeByIdRequest;
use App\Containers\AppSection\Triaje\UI\API\Transformers\TriajeTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindTriajeByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findTriajeById(FindTriajeByIdRequest $request): array
    {
        $triaje = app(FindTriajeByIdAction::class)->run($request);

        return $this->transform($triaje, TriajeTransformer::class);
    }
}
