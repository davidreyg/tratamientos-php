<?php

namespace App\Containers\AppSection\Triaje\Actions;

use App\Containers\AppSection\Triaje\Models\Triaje;
use App\Containers\AppSection\Triaje\Tasks\FindTriajeByIdTask;
use App\Containers\AppSection\Triaje\UI\API\Requests\FindTriajeByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindTriajeByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindTriajeByIdRequest $request): Triaje
    {
        return app(FindTriajeByIdTask::class)->run($request->id);
    }
}
