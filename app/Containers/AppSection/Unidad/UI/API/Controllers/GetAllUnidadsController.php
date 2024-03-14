<?php

namespace App\Containers\AppSection\Unidad\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Unidad\Actions\GetAllUnidadsAction;
use App\Containers\AppSection\Unidad\UI\API\Requests\GetAllUnidadsRequest;
use App\Containers\AppSection\Unidad\UI\API\Transformers\UnidadTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllUnidadsController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllUnidads(GetAllUnidadsRequest $request): array
    {
        $unidads = app(GetAllUnidadsAction::class)->run($request);

        return $this->transform($unidads, UnidadTransformer::class);
    }
}
