<?php

namespace App\Containers\AppSection\Orden\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Orden\Actions\UpdateOrdenEstadoAction;
use App\Containers\AppSection\Orden\UI\API\Requests\UpdateOrdenEstadoRequest;
use App\Containers\AppSection\Orden\UI\API\Transformers\OrdenTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateOrdenEstadoController extends ApiController
{
    /**
     * @param UpdateOrdenEstadoRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateOrden(UpdateOrdenEstadoRequest $request): array
    {
        $orden = app(UpdateOrdenEstadoAction::class)->transactionalRun($request);

        return $this->transform($orden, OrdenTransformer::class);
    }
}
