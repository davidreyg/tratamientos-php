<?php

namespace App\Containers\AppSection\Establecimiento\Actions;

use App\Containers\AppSection\Establecimiento\Models\Establecimiento;
use App\Containers\AppSection\Establecimiento\Tasks\FindEstablecimientoByIdTask;
use App\Containers\AppSection\Establecimiento\UI\API\Requests\FindEstablecimientoByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindEstablecimientoByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindEstablecimientoByIdRequest $request): Establecimiento
    {
        return app(FindEstablecimientoByIdTask::class)->run($request->id);
    }
}
