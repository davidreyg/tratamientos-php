<?php

namespace App\Containers\AppSection\Control\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Control\Actions\FindControlByIdAction;
use App\Containers\AppSection\Control\UI\API\Requests\FindControlByIdRequest;
use App\Containers\AppSection\Control\UI\API\Transformers\ControlTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindControlByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findControlById(FindControlByIdRequest $request): array
    {
        $control = app(FindControlByIdAction::class)->run($request);

        return $this->transform($control, ControlTransformer::class);
    }
}
