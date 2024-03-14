<?php

namespace App\Containers\AppSection\Unidad\Actions;

use App\Containers\AppSection\Unidad\Models\Unidad;
use App\Containers\AppSection\Unidad\Tasks\FindUnidadByIdTask;
use App\Containers\AppSection\Unidad\UI\API\Requests\FindUnidadByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindUnidadByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindUnidadByIdRequest $request): Unidad
    {
        return app(FindUnidadByIdTask::class)->run($request->id);
    }
}
