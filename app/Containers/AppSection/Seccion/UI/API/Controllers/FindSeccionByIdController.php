<?php

namespace App\Containers\AppSection\Seccion\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Seccion\Actions\FindSeccionByIdAction;
use App\Containers\AppSection\Seccion\UI\API\Requests\FindSeccionByIdRequest;
use App\Containers\AppSection\Seccion\UI\API\Transformers\SeccionTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindSeccionByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findSeccionById(FindSeccionByIdRequest $request): array
    {
        $seccion = app(FindSeccionByIdAction::class)->run($request);

        return $this->transform($seccion, SeccionTransformer::class);
    }
}
