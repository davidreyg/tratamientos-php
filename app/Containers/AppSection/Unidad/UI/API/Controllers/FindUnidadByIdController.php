<?php

namespace App\Containers\AppSection\Unidad\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Unidad\Actions\FindUnidadByIdAction;
use App\Containers\AppSection\Unidad\UI\API\Requests\FindUnidadByIdRequest;
use App\Containers\AppSection\Unidad\UI\API\Transformers\UnidadTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindUnidadByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findUnidadById(FindUnidadByIdRequest $request): array
    {
        $unidad = app(FindUnidadByIdAction::class)->run($request);

        return $this->transform($unidad, UnidadTransformer::class);
    }
}
