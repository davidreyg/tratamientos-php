<?php

namespace App\Containers\AppSection\Unidad\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Unidad\Actions\UpdateUnidadAction;
use App\Containers\AppSection\Unidad\UI\API\Requests\UpdateUnidadRequest;
use App\Containers\AppSection\Unidad\UI\API\Transformers\UnidadTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateUnidadController extends ApiController
{
    /**
     * @param UpdateUnidadRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateUnidad(UpdateUnidadRequest $request): array
    {
        $unidad = app(UpdateUnidadAction::class)->run($request);

        return $this->transform($unidad, UnidadTransformer::class);
    }
}
