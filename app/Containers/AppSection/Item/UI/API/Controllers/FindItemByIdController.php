<?php

namespace App\Containers\AppSection\Item\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Item\Actions\FindItemByIdAction;
use App\Containers\AppSection\Item\UI\API\Requests\FindItemByIdRequest;
use App\Containers\AppSection\Item\UI\API\Transformers\ItemTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindItemByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findItemById(FindItemByIdRequest $request): array
    {
        $item = app(FindItemByIdAction::class)->run($request);

        return $this->transform($item, ItemTransformer::class);
    }
}
