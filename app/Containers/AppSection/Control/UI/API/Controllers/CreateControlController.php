<?php

namespace App\Containers\AppSection\Control\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Control\Actions\CreateControlAction;
use App\Containers\AppSection\Control\UI\API\Requests\CreateControlRequest;
use App\Containers\AppSection\Control\UI\API\Transformers\ControlTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateControlController extends ApiController
{
    /**
     * @param CreateControlRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createControl(CreateControlRequest $request): JsonResponse
    {
        $control = app(CreateControlAction::class)->run($request);

        return $this->created($this->transform($control, ControlTransformer::class));
    }
}
