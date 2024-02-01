<?php

namespace App\Containers\AppSection\Persona\Actions;

use App\Containers\AppSection\Persona\Models\Persona;
use App\Containers\AppSection\Persona\Tasks\FindPersonaByIdTask;
use App\Containers\AppSection\Persona\UI\API\Requests\FindPersonaByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindPersonaByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindPersonaByIdRequest $request): Persona
    {
        return app(FindPersonaByIdTask::class)->run($request->id);
    }
}
