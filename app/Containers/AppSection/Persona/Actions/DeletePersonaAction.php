<?php

namespace App\Containers\AppSection\Persona\Actions;

use App\Containers\AppSection\Persona\Tasks\DeletePersonaTask;
use App\Containers\AppSection\Persona\UI\API\Requests\DeletePersonaRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeletePersonaAction extends ParentAction
{
    /**
     * @param DeletePersonaRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeletePersonaRequest $request): int
    {
        return app(DeletePersonaTask::class)->run($request->id);
    }
}
