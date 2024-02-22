<?php

namespace App\Containers\AppSection\Triaje\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Triaje\Actions\UpdateTriajeAction;
use App\Containers\AppSection\Triaje\UI\API\Requests\UpdateTriajeRequest;
use App\Containers\AppSection\Triaje\UI\API\Transformers\TriajeTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateTriajeController extends ApiController
{
    /**
     * @param UpdateTriajeRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateTriaje(UpdateTriajeRequest $request): array
    {
        $triaje = app(UpdateTriajeAction::class)->transactionalRun($request);

        return $this->transform($triaje, TriajeTransformer::class);
    }
}
