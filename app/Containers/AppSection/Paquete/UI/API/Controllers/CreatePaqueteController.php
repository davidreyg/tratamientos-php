<?php

namespace App\Containers\AppSection\Paquete\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Paquete\Actions\CreatePaqueteAction;
use App\Containers\AppSection\Paquete\UI\API\Requests\CreatePaqueteRequest;
use App\Containers\AppSection\Paquete\UI\API\Transformers\PaqueteTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreatePaqueteController extends ApiController
{
    /**
     * @param CreatePaqueteRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createPaquete(CreatePaqueteRequest $request): JsonResponse
    {
        $paquete = app(CreatePaqueteAction::class)->run($request);

        return $this->created($this->transform($paquete, PaqueteTransformer::class));
    }
}
