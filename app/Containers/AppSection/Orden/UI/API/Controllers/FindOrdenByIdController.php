<?php

namespace App\Containers\AppSection\Orden\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Orden\Actions\FindOrdenByIdAction;
use App\Containers\AppSection\Orden\UI\API\Requests\FindOrdenByIdRequest;
use App\Containers\AppSection\Orden\UI\API\Transformers\OrdenTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindOrdenByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findOrdenById(FindOrdenByIdRequest $request): array
    {
        $orden = app(FindOrdenByIdAction::class)->run($request);

        return $this->transform($orden, OrdenTransformer::class);
    }
}
