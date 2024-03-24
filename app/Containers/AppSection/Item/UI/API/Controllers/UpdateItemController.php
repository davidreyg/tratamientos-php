<?php

namespace App\Containers\AppSection\Item\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Item\Actions\UpdateItemAction;
use App\Containers\AppSection\Item\UI\API\Requests\UpdateItemRequest;
use App\Containers\AppSection\Item\UI\API\Transformers\ItemTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateItemController extends ApiController
{
    /**
     * @param UpdateItemRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateItem(UpdateItemRequest $request): array
    {
        $item = app(UpdateItemAction::class)->run($request);

        return $this->transform($item, ItemTransformer::class);
    }
}
