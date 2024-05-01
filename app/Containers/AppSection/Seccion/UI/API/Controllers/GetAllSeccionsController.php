<?php

namespace App\Containers\AppSection\Seccion\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Seccion\Actions\GetAllSeccionsAction;
use App\Containers\AppSection\Seccion\UI\API\Requests\GetAllSeccionsRequest;
use App\Containers\AppSection\Seccion\UI\API\Transformers\SeccionTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllSeccionsController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllSeccions(GetAllSeccionsRequest $request): array
    {
        $seccions = app(GetAllSeccionsAction::class)->run($request);

        return $this->transform($seccions, SeccionTransformer::class);
    }
}
