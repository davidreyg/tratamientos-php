<?php

namespace App\Containers\AppSection\Paquete\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Paquete\Actions\GetAllPaquetesAction;
use App\Containers\AppSection\Paquete\UI\API\Requests\GetAllPaquetesRequest;
use App\Containers\AppSection\Paquete\UI\API\Transformers\PaqueteTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllPaquetesController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllPaquetes(GetAllPaquetesRequest $request): array
    {
        $paquetes = app(GetAllPaquetesAction::class)->run($request);

        return $this->transform($paquetes, PaqueteTransformer::class);
    }
}
