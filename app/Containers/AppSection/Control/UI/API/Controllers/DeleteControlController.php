<?php

namespace App\Containers\AppSection\Control\UI\API\Controllers;

use App\Containers\AppSection\Control\Actions\DeleteControlAction;
use App\Containers\AppSection\Control\UI\API\Requests\DeleteControlRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteControlController extends ApiController
{
    /**
     * @param DeleteControlRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteControl(DeleteControlRequest $request): JsonResponse
    {
        app(DeleteControlAction::class)->run($request);

        return $this->noContent();
    }
}
