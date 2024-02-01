<?php

namespace App\Containers\AppSection\Financiamiento\Actions;

use App\Containers\AppSection\Financiamiento\Models\Financiamiento;
use App\Containers\AppSection\Financiamiento\Tasks\FindFinanciamientoByIdTask;
use App\Containers\AppSection\Financiamiento\UI\API\Requests\FindFinanciamientoByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindFinanciamientoByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindFinanciamientoByIdRequest $request): Financiamiento
    {
        return app(FindFinanciamientoByIdTask::class)->run($request->id);
    }
}
