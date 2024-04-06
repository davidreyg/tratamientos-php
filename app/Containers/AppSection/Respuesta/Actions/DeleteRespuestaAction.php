<?php

namespace App\Containers\AppSection\Respuesta\Actions;

use App\Containers\AppSection\Respuesta\Tasks\DeleteRespuestaTask;
use App\Containers\AppSection\Respuesta\UI\API\Requests\DeleteRespuestaRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteRespuestaAction extends ParentAction
{
    /**
     * @param DeleteRespuestaRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteRespuestaRequest $request): int
    {
        return app(DeleteRespuestaTask::class)->run($request->id);
    }
}
