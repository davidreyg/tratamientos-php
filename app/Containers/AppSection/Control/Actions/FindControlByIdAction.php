<?php

namespace App\Containers\AppSection\Control\Actions;

use App\Containers\AppSection\Control\Models\Control;
use App\Containers\AppSection\Control\Tasks\FindControlByIdTask;
use App\Containers\AppSection\Control\UI\API\Requests\FindControlByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindControlByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindControlByIdRequest $request): Control
    {
        return app(FindControlByIdTask::class)->run($request->id);
    }
}
