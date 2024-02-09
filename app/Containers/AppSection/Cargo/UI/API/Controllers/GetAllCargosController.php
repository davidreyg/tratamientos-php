<?php

namespace App\Containers\AppSection\Cargo\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Cargo\Actions\GetAllCargosAction;
use App\Containers\AppSection\Cargo\UI\API\Requests\GetAllCargosRequest;
use App\Containers\AppSection\Cargo\UI\API\Transformers\CargoTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllCargosController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllCargos(GetAllCargosRequest $request): array
    {
        $cargos = app(GetAllCargosAction::class)->run($request);

        return $this->transform($cargos, CargoTransformer::class);
    }
}
