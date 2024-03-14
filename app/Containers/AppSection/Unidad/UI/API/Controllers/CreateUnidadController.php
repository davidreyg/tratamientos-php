<?php

namespace App\Containers\AppSection\Unidad\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Unidad\Actions\CreateUnidadAction;
use App\Containers\AppSection\Unidad\UI\API\Requests\CreateUnidadRequest;
use App\Containers\AppSection\Unidad\UI\API\Transformers\UnidadTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateUnidadController extends ApiController
{
    /**
     * @param CreateUnidadRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createUnidad(CreateUnidadRequest $request): JsonResponse
    {
        $unidad = app(CreateUnidadAction::class)->run($request);

        return $this->created($this->transform($unidad, UnidadTransformer::class));
    }
}
