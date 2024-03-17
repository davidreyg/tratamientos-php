<?php

namespace App\Containers\AppSection\Orden\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Orden\Actions\RegistrarOrdenAction;
use App\Containers\AppSection\Orden\Actions\VerificarOrdenAction;
use App\Containers\AppSection\Orden\UI\API\Requests\VerificarOrdenRequest;
use App\Containers\AppSection\Orden\UI\API\Transformers\OrdenTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class VerificarOrdenController extends ApiController
{
    /**
     * @param VerificarOrdenRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateOrden(VerificarOrdenRequest $request): array
    {
        $orden = app(VerificarOrdenAction::class)->transactionalRun($request);

        return $this->transform($orden, OrdenTransformer::class);
    }
}
