<?php

namespace App\Containers\AppSection\Orden\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Orden\Actions\GetAllOrdensAction;
use App\Containers\AppSection\Orden\UI\API\Requests\GetAllOrdensRequest;
use App\Containers\AppSection\Orden\UI\API\Transformers\OrdenTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllOrdensController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllOrdens(GetAllOrdensRequest $request): array
    {
        $ordens = app(GetAllOrdensAction::class)->run($request);

        return $this->transform($ordens, OrdenTransformer::class);
    }
}
