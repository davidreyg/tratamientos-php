<?php

namespace App\Containers\AppSection\Orden\Actions;

use App\Containers\AppSection\Orden\Models\Orden;
use App\Containers\AppSection\Orden\Tasks\FindOrdenByIdTask;
use App\Containers\AppSection\Orden\UI\API\Requests\FindOrdenByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindOrdenByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindOrdenByIdRequest $request): Orden
    {
        return app(FindOrdenByIdTask::class)->run($request->id);
    }
}
