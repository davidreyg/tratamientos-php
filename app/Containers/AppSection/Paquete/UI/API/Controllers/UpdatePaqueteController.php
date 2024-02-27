<?php

namespace App\Containers\AppSection\Paquete\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Paquete\Actions\UpdatePaqueteAction;
use App\Containers\AppSection\Paquete\UI\API\Requests\UpdatePaqueteRequest;
use App\Containers\AppSection\Paquete\UI\API\Transformers\PaqueteTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdatePaqueteController extends ApiController
{
    /**
     * @param UpdatePaqueteRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updatePaquete(UpdatePaqueteRequest $request): array
    {
        $paquete = app(UpdatePaqueteAction::class)->run($request);

        return $this->transform($paquete, PaqueteTransformer::class);
    }
}
