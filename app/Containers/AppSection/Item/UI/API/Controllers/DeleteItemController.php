<?php

namespace App\Containers\AppSection\Item\UI\API\Controllers;

use App\Containers\AppSection\Item\Actions\DeleteItemAction;
use App\Containers\AppSection\Item\UI\API\Requests\DeleteItemRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteItemController extends ApiController
{
    /**
     * @param DeleteItemRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteItem(DeleteItemRequest $request): JsonResponse
    {
        app(DeleteItemAction::class)->run($request);

        return $this->noContent();
    }
}
