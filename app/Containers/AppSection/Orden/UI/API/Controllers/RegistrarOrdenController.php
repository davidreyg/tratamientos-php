<?php

namespace App\Containers\AppSection\Orden\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Orden\Actions\RegistrarOrdenAction;
use App\Containers\AppSection\Orden\UI\API\Requests\RegistrarOrdenRequest;
use App\Containers\AppSection\Orden\UI\API\Transformers\OrdenTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class RegistrarOrdenController extends ApiController
{
    /**
     * @param RegistrarOrdenRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateOrden(RegistrarOrdenRequest $request): array
    {
        $orden = app(RegistrarOrdenAction::class)->transactionalRun($request);

        return $this->transform($orden, OrdenTransformer::class);
    }
}
