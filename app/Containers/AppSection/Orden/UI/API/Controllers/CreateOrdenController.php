<?php

namespace App\Containers\AppSection\Orden\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Orden\Actions\CreateOrdenAction;
use App\Containers\AppSection\Orden\UI\API\Requests\CreateOrdenRequest;
use App\Containers\AppSection\Orden\UI\API\Transformers\OrdenTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateOrdenController extends ApiController
{
    /**
     * @param CreateOrdenRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createOrden(CreateOrdenRequest $request): JsonResponse
    {
        $orden = app(CreateOrdenAction::class)->transactionalRun($request);

        return $this->created($this->transform($orden, OrdenTransformer::class));
    }
}
