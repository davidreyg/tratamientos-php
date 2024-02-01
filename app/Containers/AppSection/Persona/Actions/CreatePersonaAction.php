<?php

namespace App\Containers\AppSection\Persona\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Persona\Models\Persona;
use App\Containers\AppSection\Persona\Tasks\CreatePersonaTask;
use App\Containers\AppSection\Persona\UI\API\Requests\CreatePersonaRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreatePersonaAction extends ParentAction
{
    /**
     * @param CreatePersonaRequest $request
     * @return Persona
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreatePersonaRequest $request): Persona
    {
        $data = $request->validated();

        return app(CreatePersonaTask::class)->run($data);
    }
}
