<?php

namespace App\Containers\AppSection\Cargo\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Cargo\Actions\FindCargoByIdAction;
use App\Containers\AppSection\Cargo\UI\API\Requests\FindCargoByIdRequest;
use App\Containers\AppSection\Cargo\UI\API\Transformers\CargoTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindCargoByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findCargoById(FindCargoByIdRequest $request): array
    {
        $cargo = app(FindCargoByIdAction::class)->run($request);

        return $this->transform($cargo, CargoTransformer::class);
    }
}
