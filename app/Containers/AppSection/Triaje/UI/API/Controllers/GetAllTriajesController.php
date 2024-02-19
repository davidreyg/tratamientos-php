<?php

namespace App\Containers\AppSection\Triaje\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Triaje\Actions\GetAllTriajesAction;
use App\Containers\AppSection\Triaje\UI\API\Requests\GetAllTriajesRequest;
use App\Containers\AppSection\Triaje\UI\API\Transformers\TriajeTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllTriajesController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllTriajes(GetAllTriajesRequest $request): array
    {
        $triajes = app(GetAllTriajesAction::class)->run($request);

        return $this->transform($triajes, TriajeTransformer::class);
    }
}
