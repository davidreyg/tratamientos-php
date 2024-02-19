<?php

namespace App\Containers\AppSection\Triaje\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Triaje\Actions\CreateTriajeAction;
use App\Containers\AppSection\Triaje\UI\API\Requests\CreateTriajeRequest;
use App\Containers\AppSection\Triaje\UI\API\Transformers\TriajeTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateTriajeController extends ApiController
{
    /**
     * @param CreateTriajeRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createTriaje(CreateTriajeRequest $request): JsonResponse
    {
        $triaje = app(CreateTriajeAction::class)->run($request);

        return $this->created($this->transform($triaje, TriajeTransformer::class));
    }
}
