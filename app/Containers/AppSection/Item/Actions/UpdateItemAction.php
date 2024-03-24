<?php

namespace App\Containers\AppSection\Item\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Item\Models\Item;
use App\Containers\AppSection\Item\Tasks\UpdateItemTask;
use App\Containers\AppSection\Item\UI\API\Requests\UpdateItemRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateItemAction extends ParentAction
{
    /**
     * @param UpdateItemRequest $request
     * @return Item
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateItemRequest $request): Item
    {
        $data = $request->validated();

        return app(UpdateItemTask::class)->run($data, $request->id);
    }
}
