<?php

namespace App\Containers\AppSection\Item\Actions;

use App\Containers\AppSection\Item\Models\Item;
use App\Containers\AppSection\Item\Tasks\FindItemByIdTask;
use App\Containers\AppSection\Item\UI\API\Requests\FindItemByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindItemByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindItemByIdRequest $request): Item
    {
        return app(FindItemByIdTask::class)->run($request->id);
    }
}
