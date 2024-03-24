<?php

namespace App\Containers\AppSection\Item\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Item\Actions\GetAllItemsAction;
use App\Containers\AppSection\Item\UI\API\Requests\GetAllItemsRequest;
use App\Containers\AppSection\Item\UI\API\Transformers\ItemTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllItemsController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllItems(GetAllItemsRequest $request): array
    {
        $items = app(GetAllItemsAction::class)->run($request);

        return $this->transform($items, ItemTransformer::class);
    }
}
