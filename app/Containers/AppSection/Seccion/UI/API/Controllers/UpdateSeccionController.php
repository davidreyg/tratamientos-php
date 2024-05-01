<?php

namespace App\Containers\AppSection\Seccion\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Seccion\Actions\UpdateSeccionAction;
use App\Containers\AppSection\Seccion\UI\API\Requests\UpdateSeccionRequest;
use App\Containers\AppSection\Seccion\UI\API\Transformers\SeccionTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateSeccionController extends ApiController
{
    /**
     * @param UpdateSeccionRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateSeccion(UpdateSeccionRequest $request): array
    {
        $seccion = app(UpdateSeccionAction::class)->run($request);

        return $this->transform($seccion, SeccionTransformer::class);
    }
}
