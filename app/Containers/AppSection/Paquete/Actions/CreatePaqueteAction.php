<?php

namespace App\Containers\AppSection\Paquete\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Paquete\Models\Paquete;
use App\Containers\AppSection\Paquete\Tasks\CreatePaqueteTask;
use App\Containers\AppSection\Paquete\UI\API\Requests\CreatePaqueteRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreatePaqueteAction extends ParentAction
{
    /**
     * @param CreatePaqueteRequest $request
     * @return Paquete
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreatePaqueteRequest $request): Paquete
    {
        $data = $request->validated();

        return app(CreatePaqueteTask::class)->run($data);
    }
}
