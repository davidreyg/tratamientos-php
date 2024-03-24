<?php

namespace App\Containers\AppSection\Item\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Item\Actions\CreateItemAction;
use App\Containers\AppSection\Item\UI\API\Requests\CreateItemRequest;
use App\Containers\AppSection\Item\UI\API\Transformers\ItemTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateItemController extends ApiController
{
    /**
     * @param CreateItemRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createItem(CreateItemRequest $request): JsonResponse
    {
        $item = app(CreateItemAction::class)->run($request);

        return $this->created($this->transform($item, ItemTransformer::class));
    }
}
