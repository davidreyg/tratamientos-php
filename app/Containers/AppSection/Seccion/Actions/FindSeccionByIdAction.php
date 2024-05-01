<?php

namespace App\Containers\AppSection\Seccion\Actions;

use App\Containers\AppSection\Seccion\Models\Seccion;
use App\Containers\AppSection\Seccion\Tasks\FindSeccionByIdTask;
use App\Containers\AppSection\Seccion\UI\API\Requests\FindSeccionByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindSeccionByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindSeccionByIdRequest $request): Seccion
    {
        return app(FindSeccionByIdTask::class)->run($request->id);
    }
}
