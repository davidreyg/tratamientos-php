<?php

namespace App\Containers\AppSection\Control\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Control\Actions\UpdateControlAction;
use App\Containers\AppSection\Control\UI\API\Requests\UpdateControlRequest;
use App\Containers\AppSection\Control\UI\API\Transformers\ControlTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateControlController extends ApiController
{
    /**
     * @param UpdateControlRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateControl(UpdateControlRequest $request): array
    {
        $control = app(UpdateControlAction::class)->run($request);

        return $this->transform($control, ControlTransformer::class);
    }
}
