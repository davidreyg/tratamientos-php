<?php

namespace App\Containers\AppSection\Paquete\Actions;

use App\Containers\AppSection\Paquete\Models\Paquete;
use App\Containers\AppSection\Paquete\Tasks\FindPaqueteByIdTask;
use App\Containers\AppSection\Paquete\UI\API\Requests\FindPaqueteByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindPaqueteByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindPaqueteByIdRequest $request): Paquete
    {
        return app(FindPaqueteByIdTask::class)->run($request->id);
    }
}
