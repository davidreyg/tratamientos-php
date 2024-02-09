<?php

namespace App\Containers\AppSection\Cargo\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Cargo\Actions\UpdateCargoAction;
use App\Containers\AppSection\Cargo\UI\API\Requests\UpdateCargoRequest;
use App\Containers\AppSection\Cargo\UI\API\Transformers\CargoTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateCargoController extends ApiController
{
    /**
     * @param UpdateCargoRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateCargo(UpdateCargoRequest $request): array
    {
        $cargo = app(UpdateCargoAction::class)->run($request);

        return $this->transform($cargo, CargoTransformer::class);
    }
}
