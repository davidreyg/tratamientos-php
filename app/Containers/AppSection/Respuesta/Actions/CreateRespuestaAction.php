<?php

namespace App\Containers\AppSection\Respuesta\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Respuesta\Models\Respuesta;
use App\Containers\AppSection\Respuesta\Tasks\CreateRespuestaTask;
use App\Containers\AppSection\Respuesta\UI\API\Requests\CreateRespuestaRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateRespuestaAction extends ParentAction
{
    /**
     * @param CreateRespuestaRequest $request
     * @return Respuesta
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateRespuestaRequest $request): Respuesta
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateRespuestaTask::class)->run($data);
    }
}
