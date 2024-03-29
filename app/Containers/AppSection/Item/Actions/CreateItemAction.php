<?php

namespace App\Containers\AppSection\Item\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Item\Models\Item;
use App\Containers\AppSection\Item\Tasks\CreateItemTask;
use App\Containers\AppSection\Item\UI\API\Requests\CreateItemRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateItemAction extends ParentAction
{
    /**
     * @param CreateItemRequest $request
     * @return Item
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateItemRequest $request): Item
    {
        $data = $request->validated();

        return app(CreateItemTask::class)->run($data);
    }
}
