<?php

namespace App\Containers\AppSection\Orden\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Orden\Actions\UpdateOrdenAction;
use App\Containers\AppSection\Orden\UI\API\Requests\UpdateOrdenRequest;
use App\Containers\AppSection\Orden\UI\API\Transformers\OrdenTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateOrdenController extends ApiController
{
    /**
     * @param UpdateOrdenRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateOrden(UpdateOrdenRequest $request): array
    {
        $orden = app(UpdateOrdenAction::class)->run($request);

        return $this->transform($orden, OrdenTransformer::class);
    }
}
