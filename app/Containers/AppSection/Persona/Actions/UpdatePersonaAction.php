<?php

namespace App\Containers\AppSection\Persona\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Persona\Models\Persona;
use App\Containers\AppSection\Persona\Tasks\UpdatePersonaTask;
use App\Containers\AppSection\Persona\UI\API\Requests\UpdatePersonaRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdatePersonaAction extends ParentAction
{
    /**
     * @param UpdatePersonaRequest $request
     * @return Persona
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdatePersonaRequest $request): Persona
    {
        $data = $request->validated();

        return app(UpdatePersonaTask::class)->run($data, $request->id);
    }
}
