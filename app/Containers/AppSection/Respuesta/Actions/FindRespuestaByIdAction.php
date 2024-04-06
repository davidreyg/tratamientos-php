<?php

namespace App\Containers\AppSection\Respuesta\Actions;

use App\Containers\AppSection\Respuesta\Models\Respuesta;
use App\Containers\AppSection\Respuesta\Tasks\FindRespuestaByIdTask;
use App\Containers\AppSection\Respuesta\UI\API\Requests\FindRespuestaByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindRespuestaByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindRespuestaByIdRequest $request): Respuesta
    {
        return app(FindRespuestaByIdTask::class)->run($request->id);
    }
}
