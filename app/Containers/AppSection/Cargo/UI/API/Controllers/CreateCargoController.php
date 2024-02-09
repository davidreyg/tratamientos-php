<?php

namespace App\Containers\AppSection\Cargo\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Cargo\Actions\CreateCargoAction;
use App\Containers\AppSection\Cargo\UI\API\Requests\CreateCargoRequest;
use App\Containers\AppSection\Cargo\UI\API\Transformers\CargoTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateCargoController extends ApiController
{
    /**
     * @param CreateCargoRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createCargo(CreateCargoRequest $request): JsonResponse
    {
        $cargo = app(CreateCargoAction::class)->run($request);

        return $this->created($this->transform($cargo, CargoTransformer::class));
    }
}
