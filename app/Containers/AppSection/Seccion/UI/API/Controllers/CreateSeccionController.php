<?php

namespace App\Containers\AppSection\Seccion\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Seccion\Actions\CreateSeccionAction;
use App\Containers\AppSection\Seccion\UI\API\Requests\CreateSeccionRequest;
use App\Containers\AppSection\Seccion\UI\API\Transformers\SeccionTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateSeccionController extends ApiController
{
    /**
     * @param CreateSeccionRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createSeccion(CreateSeccionRequest $request): JsonResponse
    {
        $seccion = app(CreateSeccionAction::class)->run($request);

        return $this->created($this->transform($seccion, SeccionTransformer::class));
    }
}
