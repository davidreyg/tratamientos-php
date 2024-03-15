<?php

namespace App\Containers\AppSection\Orden\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Orden\Actions\UpdateOrdenAction;
use App\Containers\AppSection\Orden\Actions\UpdateOrdenResultadosAction;
use App\Containers\AppSection\Orden\UI\API\Requests\UpdateOrdenResultadosRequest;
use App\Containers\AppSection\Orden\UI\API\Transformers\OrdenTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateOrdenResultadosController extends ApiController
{
    /**
     * @param UpdateOrdenResultadosRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateOrden(UpdateOrdenResultadosRequest $request): array
    {
        $orden = app(UpdateOrdenResultadosAction::class)->transactionalRun($request);

        return $this->transform($orden, OrdenTransformer::class);
    }
}
