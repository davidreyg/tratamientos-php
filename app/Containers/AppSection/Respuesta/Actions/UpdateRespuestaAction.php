<?php

namespace App\Containers\AppSection\Respuesta\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Respuesta\Models\Respuesta;
use App\Containers\AppSection\Respuesta\Tasks\UpdateRespuestaTask;
use App\Containers\AppSection\Respuesta\UI\API\Requests\UpdateRespuestaRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateRespuestaAction extends ParentAction
{
    /**
     * @param UpdateRespuestaRequest $request
     * @return Respuesta
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateRespuestaRequest $request): Respuesta
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateRespuestaTask::class)->run($data, $request->id);
    }
}
