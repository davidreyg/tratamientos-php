<?php

namespace App\Containers\AppSection\Paquete\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Paquete\Actions\FindPaqueteByIdAction;
use App\Containers\AppSection\Paquete\UI\API\Requests\FindPaqueteByIdRequest;
use App\Containers\AppSection\Paquete\UI\API\Transformers\PaqueteTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindPaqueteByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findPaqueteById(FindPaqueteByIdRequest $request): array
    {
        $paquete = app(FindPaqueteByIdAction::class)->run($request);

        return $this->transform($paquete, PaqueteTransformer::class);
    }
}
